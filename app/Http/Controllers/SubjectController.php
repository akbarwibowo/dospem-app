<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function subjects() {
        $id = Subject::select('id')->get();
        $subjects = Subject::select('subject')->get();
        $majors = Subject::select('major')->get();
        $concentrations = Subject::select('concentration')->get();
        
        return view('subjectsList', ['id'=>$id,'subjects' => $subjects, 'majors' => $majors, 'concentrations' => $concentrations]);
    }
    public function getSuject() {
        $subject = Subject::all();        
    }
}
