<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class timesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 9; $i++){
        DB::table('times')->insert([
                'time' => '1'.$i.'00',
        ]);
        }
    }
}
