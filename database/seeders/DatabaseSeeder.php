<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $project = new Project();
        $project->name = 'Fivicake';
        $project->status = 'done';
        $project->date = Carbon::create('2023', '08', '14');
        $project->description = "Website buatan Sendiri yang mengusung tema Penjualan Kue yang dibuat selama 12 hari dari tanggal 2 Agustus sampai 14 Agustus";
        $project->image = 'fivicake.png';
        $project->save();
        
        $project = new Project();
        $project->name = 'portofolio';
        $project->date = Carbon::create('2023', '08', '24');
        $project->description = "Website buatan sendiri yang mengusung tema Portofolio dari Diri Sendiri selama 12 hari dari tanggal 14 Agustus sampai 24 Agustus";
        $project->status = 'done';
        $project->image = 'ariiq.png';
        $project->save();
        
        // $project = new Project();
        // $project->name = 'Website AI';
        // $project->date = 2023;
        // $project->description = "Website buatan Sendiri dengan menggunakan Pemograman Laravel 10 dan Bootsrap 5";
        // $project->save();
        
        // $project = new Project();
        // $project->name = 'Website with Mobile Apps';
        // $project->date = 2023;
        // $project->description = "Website buatan Sendiri dengan menggunakan Pemograman Laravel 10 dan Bootsrap 5";
        // $project->save();
        
        // $project = new Project();
        // $project->name = 'lain lain';
        // $project->date = 2023;
        // $project->description = "Website buatan Sendiri dengan menggunakan Pemograman Laravel 10 dan Bootsrap 5";
        // $project->save();
    }
}