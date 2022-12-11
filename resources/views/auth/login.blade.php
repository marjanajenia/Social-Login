@extends('layouts.adminlayout')
@section('body')
<div class="d-flex align-items-center justify-content-center ht-100v">
    <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
      <source src="{{ asset('backend')}}/videos/video1.mp4" type="video/mp4">
      <source src="{{ asset('backend')}}/videos/video1.ogv" type="video/ogg">
      <source src="{{ asset('backend')}}/videos/video1.webm" type="video/webm">
    </video><!-- /video -->
    <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
        <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
        <div class="tx-white-5 tx-center mg-b-60">The Admin Template For Perfectionist</div>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control" placeholder="Enter Email Address" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mt-4 form-group">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="form-control" placeholder="Enter Password" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <button type="submit" class="btn btn-info btn-block">Sign In</button>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <div class="mg-t-10">Not yet a member? <a href="{{ route('register') }}" class="tx-info">Sign Up</a></div>
            <a class="btn btn-info m-1 btn-sm" href=""><i class="fab fa-google"></i> Login with Google</a>
        </form>
      </div><!-- login-wrapper -->
    </div><!-- overlay-body -->
  </div><!-- d-flex -->

@endsection()
