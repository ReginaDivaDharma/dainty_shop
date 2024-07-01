<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Make up',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now() -> format('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'name' => 'Skin care',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now() -> format('Y-m-d H:i:s')
        ]);

        DB::table('categories')->insert([
            'name' => 'Body care',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now() -> format('Y-m-d H:i:s')
        ]);


    }
}
