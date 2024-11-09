<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'judul'=> "Perbama",   
            "subjudul"=> "Unit Kegiatan Mahasiswa Persatuan Badminton Mahasiswa UIN Sunan Gunung Djati Bandung",
            "deskripsi_1"=> "logo.png",
            "deskripsi_2"=> "Lorem Ipsum",
            "kelebihan_1"=> "Lorem Ipsum",
            "kelebihan_2"=> "Lorem Ipsum",
            "kelebihan_3"=> "Lorem Ipsum",
            "kelebihan_4"=> "Lorem Ipsum",
        ]);
    }
}
