<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile(int $id){
        $user_name = User::select('name')->where('id', '=', $id)->get();
        return view('profile', ['name'=>$user_name]);
    }
}
