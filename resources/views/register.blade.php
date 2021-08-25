@extends('layouts.layout')

@section('content')
    <main>
     <div class="registerBox">
         <form action="/register.html" method="POST">
            @csrf
             <p>Name</p>
             <input type="text" name="name" id="name" placeholder="Enter Name">
             <p>Email</p>
             <input type="email" name="email" id="email" placeholder="Enter Email">
             <p>Phone Number</p>
             <input type="tel" name="phone_number" id="phone_number" placeholder="Enter Phone Number" pattern="[0-9]{11}">
             <p>Username</p>
             <input type="text" name="username" id="username" placeholder="Enter Username">
             <p>Password</p>
             <input type="password" name="password" id="password" placeholder="Enter Password"><br>
             <input type="submit" name="submit" id="submit" value="Create"><br>
         </form>
         @if ( $errors->any())
             </div class="w-4/8 m-auto text-centre">
                 @foreach ($errors->all() as $error)
                     <li class="text-red-500 list-non">
                         {{ $error }}
                     </li>
                 @endforeach
             </div>
         @endif
     </div>

    </main>
@endsection
