@extends('layouts.auth')

@section('title', 'Login  :: ')

@section('auth-content')

  <div class="card auth-card mx-auto" bis_skin_checked="1">
    <div bis_skin_checked="1">
      
      <!-- <form method="POST" class="email-login select-none"> -->
        <input type="hidden" name="_token" value="i4B1v7SGT4VA4A3Dd73cbmRFqDopFWPUenz6FVQe">
        <input type="hidden" name="referer" value="https://statamic.com/">
        
        <div class="mb-8" bis_skin_checked="1">
          <label for="input-email" class="mb-2">Email</label>
          <input type="text" name="email" value="" autofocus="autofocus" id="input-email" class="input-text input-text">
        </div>
        
        <div class="mb-8" bis_skin_checked="1">
          <label for="input-password" class="mb-2">Password</label>
          <input type="password" name="password" id="input-password" class="input-text input-text">
        </div>
          
        <div class="flex justify-between items-center" bis_skin_checked="1">
          <label for="remember-me" class="flex items-center cursor-pointer">
            <input type="checkbox" name="remember" id="remember-me">
              <span class="rtl:mr-2 ltr:ml-2">Remember me</span>
            </label>
            <a href="{{route('dashboard')}}"><button type="submit" class="btn-primary">Login</button></a>
        </div>
        
      <!-- </form> -->
    </div>
  </div>

  <div class="w-full text-center mt-4" bis_skin_checked="1">
    <a href="{{ route ('auth.forgot') }}" class="forgot-password-link text-sm opacity-75 hover:opacity-100"> Forgot password? </a>
  </div>

@endsection
