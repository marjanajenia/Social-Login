<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Providers\RouteServiceProvider;

class SocialmediaLogin extends Controller
{
    public function togoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function googleInfoStore(){
        //try{
            $googleUser=Socialite::driver('google')->stateless()->user();
            $findUser=User::where('socialId', $googleUser->id)->first();
            if($findUser){
                Auth::login($findUser);
                return redirect()->intended(RouteServiceProvider::HOME);
            }
            else{
                $tableField= new User();
                $tableField->name=$googleUser->name;
                $tableField->email=$googleUser->email;
                $tableField->socialId=$googleUser->id;
                $tableField->password=encrypt($googleUser->id);
                $tableField->save();
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        // }
        // catch(Exception $e){
        //     dd($e->getMessage());
        // }
    }
}
