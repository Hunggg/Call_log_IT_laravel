<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(userSeeder::class);
    }
}

class userSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
           ['name'=>'leader','password'=>bcrypt('123456'),'level'=>1],
            ['name'=>'sub_leader','password'=>bcrypt('123456'),'level'=>2],
            ['name'=>'member','password'=>bcrypt('hungcan1997TB'),'level'=>3]
        ]);
    }
}
