<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function home(){
        return view('homepage');
    }

    public function about(){
        return view('about');
    }

    public function login(){
        return view('login');
    }

    public function contact(){
        return view('contact');
    }

    public function register(){
        return view('register');
    }

    public function feed(){
        return view('feed');
    }

    public function feedid($id){
        return view('feed', ['id' => $id]);
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'phone_number' => 'required|unique:users,phone_number',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'image'=>'mimes:jpg,png,jpeg|max:5048'
        ]);

        $user = new User();

        $user->name = request('name');
        $user->email = request('email');
        $user->phone_number = request('phone_number');
        $user->username = request('username');
        $user->password = request('password');

        if($request->image) {
            $newImageName = $request->username . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
            $user->image_path = $newImageName;
        }
        else {
            $user->image_path = '\img\user.jpg';
        }

        $user->user_type = 'member';
        $user->save();

        // TODO: make it feed/id
        return view('feed', ['id' => $user->id]);
    }

    public function profile(){
        return view('profile');
    }

    public function profileid($id){
        $user = User::where('id', $id)->get();
        return view('profile', ['user' => $user]);
    }

    public function check(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = request('username');
        $password = request('password');

        // error_log($username);
        // error_log($password);

        // $conn = mysqli_connect('localhost', 'rmz', '1234', 'kotoblys');

        // if(!$conn){
        //     echo 'Connection error:' . mysqli_connect_error();
        // }

        // $sql = "SELECT * FROM users WHERE username = '$user->username' AND password = '$user->password'";
        // $result = mysqli_query($conn, $sql);

        // $query = mysqli_fetch_row($result);

        // mysqli_free_result($result);
        // mysqli_close($conn);

        $id = User::where('username', $username)->where('password', $password)->value('id');
        // error_log($id);

        if($id){
            // echo $id;
            return view('feed', ['id' => $id]);
        }
        else{
            echo 'username or password incorrect';
            return redirect('/login.html')->with('error', 'Invalid username or password');
        }
    }

    public function addbook($id) {
        return view('addbook', ['id' => $id]);
    }
}
