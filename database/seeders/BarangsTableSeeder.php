<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;




class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama' => 'Tips Cepat Pintar', 'jumlah' => 10],
            ['nama' => 'Harus Berfikir Positif', 'jumlah' => 10],
            ['nama' => 'Membangun Visi Misi Sukses', 'jumlah' => 10],
        ];
// masukkan data ke database
        DB::table('barangs')->insert($barangs);

    }
}
