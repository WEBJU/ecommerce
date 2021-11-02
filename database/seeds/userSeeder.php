<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
              'name' => Str::random(2),
              'email' => 'suad@gmail.com',
              'role' => 'admin',
              'password' => Hash::make('password'),
          ]);
    }
}
