<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            'name'=>'rodrigo',
            'email'=>'marina2021@gmail.com',
            'password'=> Hash::make('12345678'),
            'type' => 'admin',
        ]);
    }
}
