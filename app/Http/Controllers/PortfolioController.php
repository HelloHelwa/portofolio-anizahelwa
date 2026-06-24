<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    public function index()
    {
        // 1. Data Proyek Teknologi & Kompetisi (Statis)
        $techProjects = [
            (object)[
                'title' => 'AKSIS IoT System',
                'description' => 'Sistem irigasi berbasis IoT di Desa Tawangsari menggunakan otomasi sensor.',
                'category' => 'tech'
            ],
            (object)[
                'title' => 'EcoCycle Platform',
                'description' => 'Desain platform digital untuk manajemen sirkular ekonomi dan optimasi resource.',
                'category' => 'tech'
            ]
        ];
    
        $competitionProjects = [
            // Kosongkan dulu atau isi kalau ada proyek kompetisi Kaggle/UI UX
        ];
    
        // 2. Data Prestasi, Public Speaking & Organisasi (Statis)
        $publicSpeaking = [
            (object)[
                'title' => 'Student Speaker at TEDxUniversitasBrawijaya',
                'description' => 'Membawakan materi inspiratif mengenai personal identity dan growth di depan mahasiswa.',
                'category' => 'public_speaking'
            ]
        ];
    
        $organizations = [
            (object)[
                'title' => 'Google Student Ambassador 2026',
                'description' => 'Berperan aktif sebagai ambassador dalam menjembatani teknologi Google di lingkungan kampus.',
                'category' => 'organization'
            ],
            (object)[
                'title' => 'Tanoto Scholars Association Brawijaya',
                'description' => 'Terlibat dalam berbagai program kerja sosial dan pengembangan kepemimpinan kepengurusan.',
                'category' => 'organization'
            ]
        ];
    
        // 3. Kirim langsung semua variabel ke blade tanpa panggil DB::table lagi!
        return view('index', compact('techProjects', 'competitionProjects', 'publicSpeaking', 'organizations'));
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