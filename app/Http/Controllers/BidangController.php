<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BidangController extends Controller
{
    public function index()
    {
        $bidang = DB::table('tbl_bidang')->get();
        return view('index', compact('bidang'));
    }
}
