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


        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div class="form-group">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="form-control" placeholder="Enter Your name" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <!-- Email Address -->
            <div class="form-group">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control" placeholder="Enter Email Address" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mt-4 form-group">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="form-control" placeholder="Enter Your Password" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- Confirm Password -->
            <div class="mt-4 form-group">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="form-control" placeholder="Enter Confirm Password" type="password" name="password_confirmation" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
            <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form>
      </div><!-- login-wrapper -->
    </div><!-- overlay-body -->
  </div><!-- d-flex -->

@endsection()
