<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PenerimaManfaat;
use App\Models\PantiSosial;
use App\Models\User;
use App\Models\Bantuan;
use App\Models\PenerimaBantuan;
use App\Models\ProgramRehabilitasi;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPanti = PantiSosial::count();
        $totalPenerima = PenerimaManfaat::count();
        $totalUsers = User::count();
        $recentPenerima = PenerimaManfaat::with('pantiSosial')
            ->latest()
            ->take(5)
            ->get();

        // Tambahan metrics baru
        $totalBantuan = Bantuan::count();
        $totalPenerimaBantuan = PenerimaBantuan::count();
        $totalProgramRehabilitasi = ProgramRehabilitasi::count();
        $recentBantuan = Bantuan::latest()->take(5)->get();
        $recentProgramRehabilitasi = ProgramRehabilitasi::latest()->take(5)->get();

        return view('dashboard', compact(
            'totalPanti',
            'totalPenerima',
            'totalUsers',
            'recentPenerima',
            'totalBantuan',
            'totalPenerimaBantuan',
            'totalProgramRehabilitasi',
            'recentBantuan',
            'recentProgramRehabilitasi'
        ));
    }
}
