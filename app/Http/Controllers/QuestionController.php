<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function newQuestion() {
        return view('newQuestion');
    }

    public function add(Request $request) {
        $question = Question::create([
            'question' => $request->question,
        ]);

        return view('home');
    }

    public function getQuestion() {
        $questions = Question::select('question')->get();

        return view('userForm', ['questions'=>$questions]);
    }
}
