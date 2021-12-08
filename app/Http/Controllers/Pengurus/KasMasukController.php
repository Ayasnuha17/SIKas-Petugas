<?php

namespace App\Http\Controllers\Pengurus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KasMasukController extends Controller
{
    public function index()
    {
        return view('pages.pengurus.kasmasuk'); //ambil dari folder view/pages/pengurus/home
    }
    public function detailmasuk()
    {
        return view('pages.pengurus.detailmasuk'); //ambil dari folder view/pages/pengurus/home
    }
}
