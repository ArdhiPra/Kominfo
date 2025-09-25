<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\AnakPkl;

class UserDashboardController extends Controller
{
    public function index()
    {
        // Ambil per bidang + hitung jumlah terisi per bidang
        $bidangs = Bidang::withCount(['anakPkl as terisi' => function($q) {
            $q->where('status', 'Aktif');
        }])->get();

        // Hitung sisa per bidang
        $bidangs->each(function($b) {
            $b->sisa = $b->kuota - $b->terisi;
        });

        return view('index', compact(
            'bidangs'
        ));
    }
}
