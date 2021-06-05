<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function data(){
        return view('data0226');
    }
    public function pasien(){
        return view('pasien0226');
    }
    public function dokter(){
        return view('dokter0226');
    }
    public function kamar(){
        return view('kamar0226');
    }
}
