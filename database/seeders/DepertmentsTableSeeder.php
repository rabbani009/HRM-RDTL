<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepertmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([
            'name' => 'RDTL(Head Office)',
            'slug' => 'rdtl',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);
        DB::table('offices')->insert([
            'name' => 'TELETALK(Sub Office)',
            'slug' => 'teletalk',
            'status' => 1,
            'created_at' => Carbon::now(),
            'created_by' => 1
        ]);
   
    }
}
