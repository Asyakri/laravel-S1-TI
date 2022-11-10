<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Kategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('kategori')->insert(array(
            [
                'nama'=> 'sabun'
            ],
            [
                'nama' => 'pulpen'
            ]
        ));
    }
}
