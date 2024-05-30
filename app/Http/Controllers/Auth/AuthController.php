<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use db;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function registration()
    {
        return view('auth.registration');
    }
    public function postRegistration(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'dob' => 'required|date',
            'email' => 'required|email|unique:users',
            'address' => 'required|string|max:255',
            'designation' => 'required|string',
            'contact' => 'required|string|max:20',
            'username' => 'required|string|unique:users|max:255',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $createUser = $this->create($data);
        return redirect('login')->withSuccess('You are registered Successfully.');
    }
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'dob' => $data['dob'],
            'email' => $data['email'],
            'address' =>$data['address'],
            'designation' =>$data['designation'],
            'contact' =>$data['contact'],
            'username' =>$data['username'],
            'password' => $data['password']
        ]);
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $checkLoginCredentials = $request->only('email','password');
        if(Auth::attempt($checkLoginCredentials))
        {
            return redirect('dashboard')->withSuccess('You are successfully loggedin.');
        }
        return redirect('login')->withSuccess('You login credentials are incorrect.');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function dashboard()
     {

        $users = User::all();


        return view('dashboard', ['users' => $users]);

    }
    // public function dashboard()
    // {
    //     $users = User::find($id); // Retrieve all users from the database
    //     return view('dashboard', ['users' => $users]);
    //     // if(Auth::check()) {
    //     //     return view('dashboard');
    //     // }
    //     return redirect('login')->withSuccess('Please login to access the dashboard page.');
    // }
}
