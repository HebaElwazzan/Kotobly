@extends('layouts.layout')

@section('content')
    <main>
     <div class="loginBox">
         <form action="/login.html" method="POST">
            <p class="error-msg">{{session('error')}}</p>
            @csrf
             <p>Username</p>
             <input type="text" name="username" id="username" placeholder="Enter Username">
             <p>Password</p>
             <input type="password" name="password" id="password" placeholder="Enter Password"><br>
             <input type="submit" name="submit" id="submit" value="Login"><br>
             <a href="register.html">Dont have an account?</a>
         </form>
     </div>
    </main>
@endsection
