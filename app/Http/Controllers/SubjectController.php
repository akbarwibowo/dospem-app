<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  


class SubjectController extends Controller
{
    public function subjects() {
        $id = Subject::select('id')->get();
        $subjects = Subject::select('subject')->get();
        // $majors = Subject::select('major')->get();
        // $concentrations = Subject::select('concentration_id')->get();
        $concentrations = DB::table('subjects')
                        ->join('concentrations','subjects.concentration_id','=','concentrations.id')
                        ->select('concentrations.concentration')
                        ->get();
        
        return view('subjectsList', ['id'=>$id,'subjects' => $subjects, 'concentrations' => $concentrations]);
    }

    public function adminSubjects() {
        $id = Subject::select('id')->get();
        $subjects = Subject::select('subject')->get();
        $concentrations = DB::table('subjects')
                        ->join('concentrations','subjects.concentration_id','=','concentrations.id')
                        ->select('concentrations.concentration')
                        ->get();
        
        return view('adminSubjectList', ['id'=>$id,'subjects' => $subjects, 'concentrations' => $concentrations]);
    }
    public function getSuject() {
        $subject = Subject::all();        
    }
}
