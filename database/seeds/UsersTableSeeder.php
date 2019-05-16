<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Alfredo Fernandez',
            'email' => 'alfredo@mail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
