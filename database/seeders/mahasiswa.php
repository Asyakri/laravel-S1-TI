<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa =[
            'nim' => '1432434',
            'nama' => 'hahai de',
            'jurusan' => 'Orang dalem',
            'prodi' => 'sosum',
            'created_at' => new \DateTime ,
            'updated_at' => null
        ];
        \DB::table('mahasiswa')->insert($mahasiswa);
    }
}
