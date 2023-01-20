<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Alat;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ruangan;

class UserController extends Controller
{
    //
    public function index()
    {
        // $j_alat = Alat::where('lab_id', '=', auth()->user()->lab_id)->count();

        return view('/user/index', [
            "title" => "Halaman Dashboard",
            "active" => "dashboard",
            "nomor" => 1,
            "lab" => Lab::all(),
            "user" => User::all(),
            // "jumlah_alat" => $j_alat,
        ]);
    }
    public function ruangan()
    {
        // $j_alat = Alat::where('lab_id', '=', auth()->user()->lab_id)->count();

        return view('/user/ruangan', [
            "title" => "Daftar Ruangan",
            "active" => "dashboard",
            "nomor" => 1,
            "lab" => Lab::all(),
            "ruangan" => Ruangan::all(),
            "user" => User::all(),
            // "jumlah_alat" => $j_alat,
        ]);
    }
    public function show_ruangan(Ruangan $ruangan)
    {
        // $j_alat = Alat::where('lab_id', '=', auth()->user()->lab_id)->count();

        return view('/user/show_ruangan', [
            "title" => "Daftar Ruangan",
            "active" => "dashboard",
            "nomor" => 1,
            "lab" => Lab::all(),
            "ruangan" => $ruangan,
            "user" => User::all(),
            // "jumlah_alat" => $j_alat,
        ]);
    }
    public function alat()
    {
        // $j_alat = Alat::where('lab_id', '=', auth()->user()->lab_id)->count();

        return view('/user/alat', [
            "title" => "Daftar Alat",
            "active" => "dashboard",
            "nomor" => 1,
            "lab" => Lab::all(),
            "user" => User::all(),
            // "jumlah_alat" => $j_alat,
        ]);
    }
}
