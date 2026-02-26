<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'M.Adhitya Yusuf Al-Ayyubi <br> 244107020045'; 
    }
    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
