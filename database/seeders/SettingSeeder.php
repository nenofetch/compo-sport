<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name' => 'Singgasana Sports and Recreation Centre',
            'logo' => 'Logo-SSRC-cut.webp',
            'favicon' => 'favicon.png',
            'hero' => 'hero-img.png',
            'slogan' => 'Tempat olahraga dan rekreasi terpopuler di Kota Bandung dengan banyak pilihan venue',
            'visitors' => '232',
            'event' => '521',
            'venue' => '1463',
            'telephone1' => '083222543645',
            'telephone2' => '083222543645',
            'email' => 'singgasanasnr@gmail.com',
            'address1' => 'Jl. Galuh Pakuan Barat No. 3 Singgasana Pradana Residence <br> Cibaduyut - Bandung City <br> Indonesia <br><br>',
            'open_hours' => 'Monday - Friday <br> 9:00AM - 05:00PM',
        ]);
    }
}
