<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;
use Illuminate\Support\Carbon;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try{
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){
                Auth::login($finduser);
                return redirect('/home');
            } else{
                $findemail = User::where('email', $user->email)->first();
                
                if($findemail){
                    return redirect('register')->with('error', 'sorry, your email has been used on this app');
                } else{
                    $newUser = User::create([
                        'name'=>$user->name,
                        'email'=>$user->email,
                        'email_verified_at'=>Carbon::now(),
                        'google_id'=>$user->id,
                        'password'=>encrypt('qwertyuiop')
                    ]);

                    Auth::login($newUser);
                    return redirect('/home');
                }
            }
        } catch (Exception $e){
            return redirect('login')->with('error','sorry, we are currently maintaining our app');
        }
    }
}
