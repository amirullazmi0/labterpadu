<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Alat;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index()
    {
        $j_alat = Alat::where('lab_id', '=', auth()->user()->lab_id)->count();

        return view('/admin/index', [
            "title" => "Halaman Dashboard",
            "active" => "dashboard",
            "nomor" => 1,
            "lab" => Lab::all(),
            "user" => User::all(),
            "jumlah_alat" => $j_alat,
        ]);
    }
}
