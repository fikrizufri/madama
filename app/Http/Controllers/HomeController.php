<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Bahan;
use App\Pelanggan;
use App\Rekanan;
use App\Meja;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Dashboard';


        $menu = Menu::all()->count();
        $bahan = Bahan::all()->count();
        $pelanggan = Pelanggan::all()->count();
        $meja = Meja::all()->count();

        return view('dashboard', compact('title','menu','bahan','pelanggan','meja'));
    }
}
