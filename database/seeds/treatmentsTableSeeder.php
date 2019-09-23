<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class treatmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('treatments')->insert([
            [
            'id' => '1',
            'name' => 'cut',
            ],
            [
                'id' => '2',
                'name' => 'color',
            ],
            [
                'id' => '3',
                'name' => 'perm',
            ],
            [
                'id' => '4',
                'name' => 'color,perm',
            ],
        ]);
    }
}
