<?php

namespace App\Http\Controllers\Pengurus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KasKeluarController extends Controller
{
    public function index()
    {
        return view('pages.pengurus.kaskeluar'); //ambil dari folder view/pages/pengurus/home
    }
    public function detailkeluar()
    {
        return view('pages.pengurus.detailkeluar'); //ambil dari folder view/pages/pengurus/home
    }
}
