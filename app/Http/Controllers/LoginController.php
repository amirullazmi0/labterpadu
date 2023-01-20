<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    public function index()
    {
        //
        return view('/login/login', [
            "title" => "Halaman Login"
        ]);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'nip' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            if (auth()->user()->level == '0') {
                return redirect()->intended('/admin');
            } elseif (auth()->user()->level == '1') {
                return redirect()->intended('/aadmin');
            } elseif (auth()->user()->level == '2') {
                return redirect()->intended('/aadmin');
            }

            $request->session()->regenerate();

            return redirect()->intended('/login');
        };

        return back()->with('error', 'Login Failed !');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function register()
    {
        return view('login.register', [
            "title" => "register",
        ]);
    }
    public function storedosen(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nip' => 'required|min:1|max:25|unique:users',
            'name' => 'required|max:50|unique:users',
            'password' => 'required|min:5|max:25',
            'level' => 'required',
            'lab_id' => 'required',
            'email' => 'required|email:dns',
            'photo' => 'image|file|max:2048',
            'address' => 'nullable'
        ]);


        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('/img/user');
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/admin/dosen')->with('success', 'Add Dosen Success !!');
    }
    public function storelaboran(Request $request)
    {

        $validatedData = $request->validate([
            'nip' => 'required|min:1|max:25|unique:users',
            'name' => 'required|max:50|unique:users',
            'password' => 'required|min:5|max:25',
            'level' => 'required',
            'lab_id' => 'required',
            'email' => 'required|email:dns',
            'photo' => 'image|file|max:2048',
            'address' => 'nullable'
        ]);

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('/img/user');
        }
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/admin/laboran')->with('success', 'Add Laboran Success !!');
    }
}