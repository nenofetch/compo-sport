<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'path' => 'HgQ2hhsLbWf9an9ADN2Phv14KuctdYNR8CJP8NEi.webp',
                'page_id' => '1',
            ],
        ];

        Image::insert($images);
    }
}
