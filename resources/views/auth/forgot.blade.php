@extends('layouts.auth')

@section('title', 'Forgot Password  :: ')

@section('auth-content')

    <div class="card auth-card mx-auto">
        <div class="text-center pb-4 mb-4">
            <h1 class="mb-4 text-lg text-gray-800">Forgot Your Password?</h1> 
            <p class="text-sm text-gray">Enter your email address so we can send a reset password link.</p>    
        </div> 
        
        <!-- <form method="POST" action="https://demo.statamic.com/cp/auth/password/email"> -->
                <input type="hidden" name="_token" value="wu6ojcIjR9IQn3e7Sie1HpRG3CIa1v47A7x7mdBL"> 
                <div class="mb-8"><label for="email" class="mb-2">Email Address</label> 
                <input id="email" type="text" name="email" class="input-text input-text">
            </div> 
            
            <a href="#"><button type="submit" class="btn-primary">Submit</button></a>
        <!-- </form> -->
    </div>
    
    <div class="w-full text-center mt-4">
        <a href="{{route('auth.login')}}" class="forgot-password-link text-sm opacity-75 hover:opacity-100">
            I remember my password
        </a>
    </div>

@endsection
