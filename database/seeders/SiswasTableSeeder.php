<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $siswas = [
    ['nama' => 'Surya', 'jenis_kelamin' => 'Pria', 'alamat' => 'kmplk sukamenak indah', 'agama' => 'Islam', 'telepon' => '087728817666', 'email' => 'suryatripatih@gmail.com'],
    ['nama' => 'mamat', 'jenis_kelamin' => 'Pria', 'alamat' => 'JL sukamenak indah', 'agama' => 'Islam', 'telepon' => '08700817666', 'email' => 'tripatih@gmail.com'],
    ['nama' => 'Faiz', 'jenis_kelamin' => 'Pria', 'alamat' => 'JL sukamenak indah Lama', 'agama' => 'Islam', 'telepon' => '087118817666', 'email' => 'Faiz@gmail.com'],
    ['nama' => 'Alvin', 'jenis_kelamin' => 'Pria', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '087724417666', 'email' => 'Alvin@gmail.com'],
    ['nama' => 'Bisma', 'jenis_kelamin' => 'Pria', 'alamat' => 'Cibaduyut', 'agama' => 'Islam', 'telepon' => '087728818866', 'email' => 'Bisma@gmail.com'],
    ['nama' => 'Robbyz', 'jenis_kelamin' => 'Pria', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '087458817666', 'email' => 'Robbyz@gmail.com'],
    ['nama' => 'Iyas', 'jenis_kelamin' => 'Pria', 'alamat' => 'JL Sukamenak Indah', 'agama' => 'Islam', 'telepon' => '082728817666', 'email' => 'Iyas@gmail.com'],
    ['nama' => 'Ali', 'jenis_kelamin' => 'Pria', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '081228817666', 'email' => 'Ali@gmail.com'],
    ['nama' => 'Zee', 'jenis_kelamin' => 'Pria', 'alamat' => 'Kopo Permai', 'agama' => 'Islam', 'telepon' => '085672817666', 'email' => 'Zee@gmail.com'],
    ['nama' => 'Rasya', 'jenis_kelamin' => 'Pria', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '087784817666', 'email' => 'Rasya@gmail.com'],
];
// masukkan data ke database
DB::table('siswas')->insert($siswas);

    }
}
