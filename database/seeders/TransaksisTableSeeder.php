<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['id_barang'=> 1 , 'id_pembeli' => 1, 'jumlah' => 10021, 'tanggal' => '2020-07-12',],
            ['id_barang'=> 2 , 'id_pembeli' => 2, 'jumlah' => 1000, 'tanggal' => '2023-06-12',],
            ['id_barang'=> 3 , 'id_pembeli' => 3, 'jumlah' => 100, 'tanggal' => '2007-06-12',],

            ];
            // masukkan data ke database
            DB::table('transaksis')->insert($transaksis);
    }
}
