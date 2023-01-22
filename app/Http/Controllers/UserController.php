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
            "navlab" => Lab::first(),
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
            "active" => "ruangan",
            "nomor" => 1,
            "navlab" => Lab::first(),
            "ruangan" => Ruangan::all(),
            "user" => User::all(),
            // "jumlah_alat" => $j_alat,
        ]);
    }
    public function show_ruangan(Ruangan $ruangan)
    {
        // $j_alat = Alat::where('lab_id', '=', auth()->user()->lab_id)->count();

        return view('/user/show_ruangan', [
            "title" => $ruangan->name,
            "active" => "ruangan",
            "nomor" => 1,
            "navlab" => Lab::first(),
            "lab" => Lab::all(),
            "ruangan" => $ruangan,
            "user" => User::all(),
            // "jumlah_alat" => $j_alat,
        ]);
    }
    public function alat(Lab $lab)
    {
        // $j_alat = Alat::where('lab_id', '=', auth()->user()->lab_id)->count();

        return view('/user/alat', [
            "title" => "Daftar Alat",
            "active" => "alat",
            "nomor" => 1,
            "alat" => Alat::where('lab_id', '=', $lab->id)->get(),
            "navlab" => Lab::first(),
            "lab" => $lab,
            "daftarlab" => lab::all(),
            "user" => User::all(),
            // "jumlah_alat" => $j_alat,
        ]);
    }

    public function show_alat(Lab $lab, Alat $alat)
    {
        // $j_alat = Alat::where('lab_id', '=', auth()->user()->lab_id)->count();

        return view('/user/show_alat', [
            "title" => $alat->name,
            "active" => "alat",
            "nomor" => 1,
            "navlab" => Lab::first(),
            "lab" => $lab,
            "alat" => $alat,
            "user" => User::all(),
            // "jumlah_alat" => $j_alat,
        ]);
    }
}
