<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i <= 3; $i++){
        DB::table('users')->insert([
            'name' => 'test'.$i,
            'email' => 'test'.$i.'@gamil.com',
            'password' => bcrypt('password'),
        ]);
        }
    }
}
