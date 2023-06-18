<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class komenseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('komen')->insert([
            'nama'=> 'aji',
            'email'=> 'ajirez1@gmail.com',
            'komentar'=> 'uwaw'
            ]);
    }
}
