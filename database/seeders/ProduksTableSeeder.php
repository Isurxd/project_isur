<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk' => 'Zx25r','Jumlah' => 120, 'tgl_produksi' => '2018-01-12', 'id_merek' => 1],
            ['nama_produk' => 'Zx10r','Jumlah' => 270, 'tgl_produksi' => '2020-03-27', 'id_merek' => 1],
            ['nama_produk' => 'Beat','Jumlah' => 200, 'tgl_produksi' => '2021-03-27', 'id_merek' => 2],
            ['nama_produk' => 'Vario','Jumlah' => 200, 'tgl_produksi' => '2020-03-27', 'id_merek' => 2],
            ['nama_produk' => 'Nmax','Jumlah' => 200, 'tgl_produksi' => '2021-03-27', 'id_merek' => 3],
            ['nama_produk' => 'Aerox','Jumlah' => 200, 'tgl_produksi' => '2020-01-12', 'id_merek' => 3],
        ];
// masukkan data ke database
        DB::table('produks')->insert($produks);

    }
}
