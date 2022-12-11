<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialmediaLogin extends Controller
{
    public function togoogle(){
        return socialite::driver('google')->redirect();
    }
}
