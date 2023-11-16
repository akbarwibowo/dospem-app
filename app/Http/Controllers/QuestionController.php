<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function newQuestion() {
        return view('newQuestion');
    }

    public function add(Request $request) {
        $question = Question::create([
            'question' => $request->question,
            'semester' => $request->semester,
            'concentration' => $request->type,
        ]);

        return view('home');
    }

    public function getQuestions() {
        $questions = Question::select('question')->where('semester', 4)->get();
        $id = Question::select('id')->get();
        $type = Question::select('concentration')->get();
        $user_id = Auth::user()->id;
        return view('form', ['questions'=>$questions, 'id'=>$id, 'user_id'=>$user_id, 'type'=>$type]);
    }
}
