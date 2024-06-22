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

            if ($posttest) {
                $status = ($posttest->kunci === $answer) ? 'benar' : 'salah';

                Jawaban::create([
                    'jawaban' => $answer,
                    'status' => $status,
                    'id_user' => $userId,
                    'id_materi' => $idMateri,
                    'id_post_test' => $postTestId,
                ]);
            }
        }

        $totalQuestions = Posttest::where('id_materi', $idMateri)->count();
        $correctAnswers = Jawaban::where('id_user', $userId)
            ->where('id_materi', $idMateri)
            ->where('status', 'benar')
            ->count();

        $score = ($correctAnswers / $totalQuestions) * 100;
        Nilai::updateOrCreate(
            ['id_user' => $userId, 'id_materi' => $idMateri],
            ['nilai' => $score]
        );

        return redirect()->back()->with('success', 'Posttest submitted successfully!');
    }
}
