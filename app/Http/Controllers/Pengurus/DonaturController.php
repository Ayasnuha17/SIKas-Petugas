<?php

namespace App\Http\Controllers\Pengurus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    public function index()
    {
        return view('pages.pengurus.donatur'); //ambil dari folder view/pages/pengurus/home
    }
}
