<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['nama'=>'Galer', 'jenis'=>'Women'],
            ['nama'=>'Isur', 'jenis'=>'lorem ipsum'],
            ];
            // masukkan data ke database
            DB::table('items')->insert($items);
    }
}
