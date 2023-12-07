<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function userList(){
        $id = User::select('id')->get();
        $name = User::select('name')->get();
        $email = User::select('email')->get();

        return view('user_list', ['id'=>$id, 'name'=>$name, 'email'=>$email]);
    }
}
