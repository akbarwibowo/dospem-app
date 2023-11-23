<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;  

class QuestionController extends Controller
{
    public function newQuestion() {
        return view('newQuestion');
    }

    public function add(Request $request) {
        $semesters = $request->input('semester');
        $con_id = $request->input('type');
        $questions = $request->input('question');
        foreach($questions as $index => $question){
            $question = Question::create([
                'question' => $question,
                'semester' => $semesters[$index],
                'concentration_id' => $con_id[$index],
            ]);
        }

        return view('home');
    }

    public function getQuestions() {
        $questions = Question::select('question')->where('semester', 4)->get();
        $id = Question::select('id')->get();
        // $type = DB::table('questions')
        //             ->join('concentrations', 'questions.concentration_id', '=', 'concentrations.id')
        //             ->select('concentrations.concentration')
        //             ->get();
        $type = Question::select('concentration_id')->get();
        $user_id = Auth::user()->id;
        return view('form', ['questions'=>$questions, 'id'=>$id, 'user_id'=>$user_id, 'type'=>$type]);
    }
}
