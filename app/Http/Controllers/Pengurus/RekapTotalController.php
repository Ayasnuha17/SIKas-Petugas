<?php

namespace App\Http\Controllers\Pengurus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RekapTotalController extends Controller
{
    public function index()
    {
        return view('pages.pengurus.rekaptotal'); //ambil dari folder view/pages/pengurus/home
    }
}
