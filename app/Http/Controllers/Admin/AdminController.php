<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Tampilkan halaman dashboard admin
     */
    public function index()
    {
        return view('admin/dashboard');
    }
}
