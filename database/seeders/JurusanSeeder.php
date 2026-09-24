<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kode' => 'RPL',
                'nama_jurusan' => 'Rekayasa Perangkat Lunak',
                'deskripsi' => 'Jurusan yang fokus pada pengembangan aplikasi, website, dan perangkat lunak.',
                'gambar' => 'rpl.jpg',
            ],
            [
                'kode' => 'TKR',
                'nama_jurusan' => 'Teknik Kendaraan Ringan',
                'deskripsi' => 'Jurusan yang fokus pada perawatan dan perbaikan kendaraan ringan/otomotif.',
                'gambar' => 'tkr.jpg',
            ],
            [
                'kode' => 'BD',
                'nama_jurusan' => 'Bisnis Daring dan Pemasaran',
                'deskripsi' => 'Jurusan yang fokus pada strategi pemasaran, bisnis online, dan kewirausahaan digital.',
                'gambar' => 'bd.jpg',
            ],
            [
                'kode' => 'APHP',
                'nama_jurusan' => 'Agribisnis Pengolahan Hasil Pertanian',
                'deskripsi' => 'Jurusan yang fokus pada pengolahan dan pengembangan hasil pertanian menjadi produk bernilai jual.',
                'gambar' => 'aphp.jpg',
            ],
        ];

        foreach ($data as $item) {
            Jurusan::create($item);
        }
    }
}