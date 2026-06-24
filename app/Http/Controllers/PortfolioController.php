<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    public function index()
    {
        // 1. Ambil data dari tabel 'projects' dan kelompokkan berdasarkan kategori
        $techProjects = DB::table('projects')->where('category', 'tech')->get();
        $competitionProjects = DB::table('projects')->where('category', 'competition')->get();

        // 2. Ambil data dari tabel 'achievements' dan kelompokkan berdasarkan kategori
        $publicSpeaking = DB::table('achievements')->where('category', 'public_speaking')->get();
        $organizations = DB::table('achievements')->where('category', 'organization')->get();

        // 3. Kirim semua variabel data di atas ke halaman tampilan (views/index.blade.php)
        return view('index', compact(
            'techProjects', 
            'competitionProjects', 
            'publicSpeaking', 
            'organizations'
        ));
    }

    public function pillars()
    {
        return view('pillars');
    }

    public function missions()
    {
        return view('missions');
    }
}