<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli'=>'Gia', 'jenis_kelamin'=>'Wanita'],
            ['nama_pembeli'=>'Isir','jenis_kelamin'=>'Pria'],
            ['nama_pembeli'=>'Ghia','jenis_kelamin'=>'Wanita'],

            ];
            // masukkan data ke database
            DB::table('pembelis')->insert($pembelis);
    }
}
