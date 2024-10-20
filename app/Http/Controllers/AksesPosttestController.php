<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Jawaban;
use App\Models\Posttest;
use Illuminate\Http\Request;
class AksesPosttestController extends Controller
{
    public function index($id)
    {
        $datas = Posttest::where('id_materi', $id)->get();
        return view('murid.aksesPostTest', compact('datas', 'id'));
    }

    public function submitPostTest(Request $request)
    {
        $userId = auth()->id(); 
        $idMateri = $request->input('id_materi');
        $answers = $request->input('answers');

        foreach ($answers as $postTestId => $answer) {
            $posttest = Posttest::find($postTestId);

            $status = $posttest && $posttest->kunci === $answer ? 'benar' : 'salah';

            Jawaban::create([
                'jawaban' => $answer,
                'status' => $status,
                'id_user' => $userId,
                'id_materi' => $idMateri,
                'id_post_test' => $postTestId,
            ]);
        }

        $totalQuestions = Posttest::where('id_materi', $idMateri)->count();

        $recentAnswers = Jawaban::where('id_user', $userId)
            ->where('id_materi', $idMateri)
            ->orderBy('created_at', 'desc')
            ->get()
            ->unique('id_post_test');

        $correctAnswers = $recentAnswers->where('status', 'benar')->count();

        $score = ($correctAnswers / $totalQuestions) * 100;
        $roundedScore = round($score);

        Nilai::create([
            'id_user' => $userId,
            'id_materi' => $idMateri,
            'nilai' => $roundedScore
        ]);

        return redirect('/riwayat')->with('success', 'Hai terimakasih sudah mengerjakan post test ini, semangat belajar ya!!');
    }
}
