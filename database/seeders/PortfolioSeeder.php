<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Clear old data to prevent duplication
        DB::table('projects')->truncate();
        DB::table('achievements')->truncate();

        // 2. Inject Data into 'projects' Table (Technical Work & Competitions/Research)
        DB::table('projects')->insert([
            [
                'title' => 'Filkom Event Platform',
                'category' => 'tech',
                'role_or_subtitle' => 'Project Manager, UI/UX Designer, and Front-End Developer',
                'description' => 'Built and developed a web-based student activity information center using Laravel framework and PostgreSQL database.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Machine Learning Project Using SVM',
                'category' => 'tech',
                'role_or_subtitle' => 'Data Science',
                'description' => 'Developed data prediction and analytical models utilizing the Titanic Dataset and CKD (Chronic Kidney Disease) Dataset.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Robotics Programming',
                'category' => 'tech',
                'role_or_subtitle' => 'IoT & Computer Vision',
                'description' => 'Challenged myself out of my comfort zone to complete IoT and Computer Vision-based programming projects within a limited timeframe under the Robotics organization.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Scientific Research',
                'category' => 'competition',
                'role_or_subtitle' => 'Research & Development',
                'description' => 'Actively engaged in scientific paper writing, committees, and collaborative research within the Student Research Group (UKM K-Risma) FILKOM UB.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Joint Lecturer Research',
                'category' => 'competition',
                'role_or_subtitle' => 'Academic Collaboration',
                'description' => 'Collaborated and directly contributed to joint research projects alongside distinguished lecturers in the Faculty of Computer Science.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // 3. Inject Data into 'achievements' Table (Non-Tech / Public Speaking & Leadership)
        DB::table('achievements')->insert([
            [
                'title' => 'Student Speaker at TEDxUniversitas Brawijaya',
                'category' => 'public_speaking',
                'date_info' => 'March 2026',
                'description' => 'Delivered an inspiring speech titled "The Power of Being Vulnerable", stepping aside from technical aspects to deeply touch the audience\'s emotional side and convey the essence of honesty and character strength.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Radio Talkshow Guest Speaker',
                'category' => 'public_speaking',
                'date_info' => '2026',
                'description' => 'Featured as a guest speaker representing the Tanoto Scholars Association (TSA) Universitas Brawijaya to introduce work programs and the TELADAN scholarship to the broader public.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Master of Ceremony (MC) & Presenter',
                'category' => 'public_speaking',
                'date_info' => '2025 - 2026',
                'description' => 'Trusted to host various formal and informal events, including department-level student gatherings, with the ability to quickly build chemistry with new partners and liven up the atmosphere.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Google Student Ambassador 2026',
                'category' => 'organization',
                'date_info' => '2026',
                'description' => 'Selected as an official student ambassador from Google to lead, educate, and build a thriving technology community within the campus environment.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tanoto Foundation Scholar',
                'category' => 'organization',
                'date_info' => '2025 - 2026',
                'description' => 'Awarded the prestigious leadership scholarship, actively participating in Leadership Workshops, Lead Self Programs, and contributing to social activities and the TSA Brawijaya management.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}