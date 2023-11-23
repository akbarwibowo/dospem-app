<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function result(Request $request, int $id) {
        $respons = $request->input('respons');
        foreach($respons as $index => $response){
                $result = Result::create([
                    'user_id' => $id,
                    'concentration_id'=>$response['type'],
                    'question_id'=>$response['id'],
                    'answers' => $response['jawaban'],
                    'semester' => $request->semester,
                ]);
        }
        
        return redirect('/home');
    }
}
