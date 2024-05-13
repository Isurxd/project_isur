<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang2s = [
            ['nama_barang'=> 'sabun' , 'harga' => 10000 , 'stok' => 10],
            ['nama_barang'=> 'HP' , 'harga' => 20000000, 'stok' => 20],
            ['nama_barang'=> 'Laptop' , 'harga' => 3000000,'stok' => 30],

            ];
            // masukkan data ke database
            DB::table('barang2s')->insert($barang2s);
    }
}
