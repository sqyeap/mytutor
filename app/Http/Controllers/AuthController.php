<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Main;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function index() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function create(array $data) {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'state' => $data['state'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function postLogin(Request $request) {
        $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('main')->with('save', 'Success')->withErrors('error', 'Failed');
        }
        return redirect("login")->withSuccess('You have invalid credentials');
    }

    public function postRegistration(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'address' => 'required',
            'state' => 'required',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        $check->save();
        return redirect("login")->with('save', 'Success')->withErrors('error', 'Failed');
    }

    public function main() {
        if (Auth::check()) {
            return view('main');
            // return view('main', ['listItems' => ListItem::where('is_complete', 0)->where('email', Auth::user()->email)->get()]);
        }
        return redirect("login")->withSuccess('You do not have access');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
