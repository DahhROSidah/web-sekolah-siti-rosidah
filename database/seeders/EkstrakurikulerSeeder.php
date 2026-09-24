<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkstrakurikulersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ekstrakurikulers')->insert([

            [
                'nama' => 'PMR',
                'deskripsi' => 'Kegiatan Palang Merah Remaja untuk melatih kepedulian sosial, kesehatan, dan keterampilan pertolongan dasar.',
                'pembina' => 'Pembina PMR',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Cinemax',
                'deskripsi' => 'Kegiatan yang mengembangkan kreativitas siswa dalam bidang fotografi, videografi, dan perfilman.',
                'pembina' => 'Pembina Cinemax',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Paskibra',
                'deskripsi' => 'Kegiatan yang melatih kedisiplinan, tanggung jawab, kepemimpinan, dan keterampilan baris-berbaris.',
                'pembina' => 'Pembina Paskibra',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Pramuka',
                'deskripsi' => 'Kegiatan kepramukaan untuk membentuk kemandirian, kedisiplinan, kerja sama, dan tanggung jawab siswa.',
                'pembina' => 'Pembina Pramuka',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Voli',
                'deskripsi' => 'Kegiatan olahraga bola voli untuk meningkatkan keterampilan, kebugaran, kerja sama, dan sportivitas.',
                'pembina' => 'Pembina Voli',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Futsal',
                'deskripsi' => 'Kegiatan olahraga futsal untuk mengembangkan kemampuan bermain, kerja sama tim, disiplin, dan sportivitas.',
                'pembina' => 'Pembina Futsal',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Bahasa Jepang',
                'deskripsi' => 'Kegiatan untuk mempelajari bahasa dan budaya Jepang serta meningkatkan kemampuan komunikasi siswa.',
                'pembina' => 'Pembina Bahasa Jepang',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Rohis',
                'deskripsi' => 'Kegiatan kerohanian Islam untuk meningkatkan pemahaman keagamaan, akhlak, dan kegiatan keislaman siswa.',
                'pembina' => 'Pembina Rohis',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Karawitan',
                'deskripsi' => 'Kegiatan seni musik tradisional untuk melestarikan budaya daerah dan mengembangkan kreativitas siswa.',
                'pembina' => 'Pembina Karawitan',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Marching Band',
                'deskripsi' => 'Kegiatan seni musik dan baris-berbaris yang melatih kekompakan, kedisiplinan, dan kreativitas siswa.',
                'pembina' => 'Pembina Marching Band',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}