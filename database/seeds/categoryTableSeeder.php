<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['柔かい','普通','硬い'];

        foreach($categories as $category){

            DB::table('categories')->insert([
                'name' => $category, 
            ]);

        }
    }
}
