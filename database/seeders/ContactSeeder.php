<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            "name"=> "Perbama",   
            "description"=> "Unit Kegiatan Mahasiswa Persatuan Badminton Mahasiswa UIN Sunan Gunung Djati Bandung",
            "logo"=> "logo.png",
            "alamat"=> "Jalan A.H. Nasution No. 105, Cipadung, Cibiru, Kota Bandung, Jawa Barat 40614",
            "email"=> "perbamauinbandung@gmail.com",
            "telepon"=> "+62 813-2486-0648",
            "maps_embed"=> "maps.com",
        ]);
    }
}
