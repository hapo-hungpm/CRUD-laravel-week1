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
        // $this->call(UsersTableSeeder::class);
        $this->call(usersSeeder::class);

    }
}

class usersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'Hung', 'email'=>str_random(3).'@haposoft.com', 'password'=>bcrypt('1245678')],
            ['name'=>'Dat', 'email'=>str_random(3).'@haposoft.com', 'password'=>bcrypt('1245678')],
            ['name'=>'Tien', 'email'=>str_random(3).'@haposoft.com', 'password'=>bcrypt('1245678')]
        ]);
    }
}

