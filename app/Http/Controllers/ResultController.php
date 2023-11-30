<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;  


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
        $con1 = DB::select('SELECT COUNT(question_id) as count FROM `result` WHERE concentration_id = 1 AND answers = 1 GROUP BY created_at ORDER BY created_at DESC LIMIT 1');
        $con2 = DB::select('SELECT COUNT(question_id) as count FROM `result` WHERE concentration_id = 2 AND answers = 1 GROUP BY created_at ORDER BY created_at DESC LIMIT 1');
        $con3 = DB::select('SELECT COUNT(question_id) as count FROM `result` WHERE concentration_id = 3 AND answers = 1 GROUP BY created_at ORDER BY created_at DESC LIMIT 1');

        if(!empty($con1)){
            $val1 = $con1[0]->count;
        } else{
            $val1 = 0;
        }
        if(!empty($con2)){
            $val2 = $con2[0]->count;
        } else{
            $val2 = 0;
        }
        if(!empty($con3)){
            $val3 = $con3[0]->count;
        } else{
            $val3 = 0;
        }

        if($val1 > $val2 || $val1 > $val3){
            $result = 'Software Engineering / RPL';
        } elseif($val2 > $val1 || $val2 > $val3){
            $result = 'Computer Networking / Jaringan Komputer';
        } elseif($val3 > $val1 || $val3 > $val2){
            $result = 'Multimedia';
        } else{
            $result = 'Anda berpotensi di ketiga konsentrasi, silakan pilih sesuai kesenangan anda';
        }

        if($result == 'Software Engineering / RPL'){
            $subjects = DB::table('subjects')
                            ->join('concentrations', 'subjects.concentration_id', '=', 'concentrations.id')
                            ->select('subjects.subject','concentrations.concentration')
                            ->where('concentrations.concentration', '=', 'Software Engineering')
                            ->where('subjects.semester', '=', 4)
                            ->get();
        } elseif($result == 'Computer Networking / Jaringan Komputer'){
            $subjects = DB::table('subjects')
                            ->join('concentrations', 'subjects.concentration_id', '=', 'concentrations.id')
                            ->select('subjects.subject', 'concentrations.concentration')
                            ->where('concentrations.concentration', '=', 'Computer Networking')
                            ->where('subjects.semester', '=', 4)
                            ->get();
        } elseif($result == 'Multimedia'){
            $subjects = DB::table('subjects')
                            ->join('concentrations', 'subjects.concentration_id', '=', 'concentrations.id')
                            ->select('subjects.subject', 'concentrations.concentration')
                            ->where('concentrations.concentration', '=', 'Multimedia')
                            ->where('subjects.semester', '=', 4)
                            ->get();
        } elseif($result == 'Anda berpotensi di ketiga konsentrasi, silakan pilih sesuai kesenangan anda'){
            $subjects = DB::table('subjects')
                            ->join('concentrations', 'subjects.concentration_id', '=', 'concentrations.id')
                            ->select('subjects.subject', 'concentrations.concentration')
                            ->where('subjects.semester', '=', 4)
                            ->get();
        }
        // dd($con1);
        return view('result', ['result'=>$result, 'subjects'=>$subjects, 'semester'=>$request->semester, 'concentration' => $subjects]);
    }

}
