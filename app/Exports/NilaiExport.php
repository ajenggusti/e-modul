<?php

namespace App\Exports;

use App\Models\Nilai;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Carbon\Carbon;

class NilaiExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        $nilais = Nilai::with(['user', 'materi'])->get();

        // Group by materi
        $grouped = $nilais->groupBy('materi.nama_materi');

        $sheets = [];

        // Add sheets based on grouped materi
        foreach ($grouped as $materi => $values) {
            $sheets[] = new class($values, $materi) implements FromCollection, WithHeadings, WithTitle {
                private $values;
                private $materi;

                public function __construct($values, $materi)
                {
                    $this->values = $values;
                    $this->materi = $materi;
                }

                public function collection()
                {
                    return $this->values->map(function ($nilai) {
                        return [
                            'ID' => $nilai->id,
                            'Nama' => $nilai->user->name,
                            'Materi' => $nilai->materi->nama_materi,
                            'Nilai' => $nilai->nilai,
                            'Waktu' => Carbon::parse($nilai->created_at)->format('d-m-Y | H:i:s'),
                        ];
                    });
                }

                public function headings(): array
                {
                    return [
                        'ID',
                        'Nama',
                        'Materi',
                        'Nilai',
                        'Waktu',
                    ];
                }

                public function title(): string
                {
                    return $this->materi;
                }
            };
        }

        // Add an additional sheet for all records
        $sheets[] = new class($nilais) implements FromCollection, WithHeadings, WithTitle {
            private $values;

            public function __construct($values)
            {
                $this->values = $values;
            }

            public function collection()
            {
                return $this->values->map(function ($nilai) {
                    return [
                        'ID' => $nilai->id,
                        'Nama' => $nilai->user->name,
                        'Materi' => $nilai->materi->nama_materi,
                        'Nilai' => $nilai->nilai,
                        'Waktu' => Carbon::parse($nilai->created_at)->format('d-m-Y | H:i:s'),
                    ];
                });
            }

            public function headings(): array
            {
                return [
                    'ID',
                    'Nama',
                    'Materi',
                    'Nilai',
                    'Waktu',
                ];
            }

            public function title(): string
            {
                return 'Semua Data';
            }
        };

        return $sheets;
    }
}
