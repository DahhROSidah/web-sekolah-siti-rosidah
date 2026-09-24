<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('profils')->insert([
            [
                'judul' => 'Profil Sekolah',
                'isi' => 'SMK merupakan sekolah yang memberikan pendidikan dan keterampilan kepada siswa - siswi untuk mempersiapkan diri memasuki dunia kerja maupun melanjutkan pendidikan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}