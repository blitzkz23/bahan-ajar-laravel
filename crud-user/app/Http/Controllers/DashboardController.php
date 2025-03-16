<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PenerimaManfaat;
use App\Models\PantiSosial;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'user' => Auth::user(),
            'totalPenerima' => PenerimaManfaat::count(),
            'totalPanti' => PantiSosial::count(),
            'totalUsers' => User::count(),
            'recentPenerima' => PenerimaManfaat::with('pantiSosial')
                                ->latest()
                                ->take(5)
                                ->get()
        ]);
    }
}
