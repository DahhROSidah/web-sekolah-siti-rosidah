<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berita')->insert([
            [
                'judul' => 'Kegiatan Sekolah Tahun Ajaran Baru',
                'slug' => Str::slug('Kegiatan Sekolah Tahun Ajaran Baru'),
                'isi_berita' => 'Sekolah melaksanakan berbagai kegiatan dalam menyambut tahun ajaran baru.',
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Prestasi Siswa di Ajang Lomba Nasional',
                'slug' => Str::slug('Prestasi Siswa di Ajang Lomba Nasional'),
                'isi_berita' => 'Siswa berhasil meraih juara pada ajang lomba tingkat nasional.',
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Kunjungan Industri Sebagai Bagian Kurikulum',
                'slug' => Str::slug('Kunjungan Industri Sebagai Bagian Kurikulum'),
                'isi_berita' => 'Kegiatan kunjungan industri diadakan untuk menambah wawasan siswa.',
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}