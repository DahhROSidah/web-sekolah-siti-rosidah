<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeries')->insert([
            [
                'judul_foto' => 'Kegiatan Sekolah',
                'file_foto' => 'kegiatan-sekolah.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_foto' => 'Upacara Bendera',
                'file_foto' => 'upacara-bendera.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_foto' => 'Kegiatan Belajar Mengajar',
                'file_foto' => 'kegiatan-belajar.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_foto' => 'Kegiatan Ekstrakurikuler',
                'file_foto' => 'ekstrakurikuler.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_foto' => 'Perayaan Hari Kemerdekaan',
                'file_foto' => 'hari-kemerdekaan.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
