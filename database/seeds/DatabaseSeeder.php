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
           ['employee_name'=>'Lít Đờ Hà Nội','name'=>'leader_hn','password'=>bcrypt('123456'),'bo_phan_IT'=>1,'level'=>1],
            ['employee_name'=>'Lít Đờ Đà Nẵng','name'=>'leader_dn','password'=>bcrypt('123456'),'bo_phan_IT'=>2,'level'=>1],
            ['employee_name'=>'Sub Lít Đờ Hà Nội','name'=>'sub_leader_hn','password'=>bcrypt('123456'),'bo_phan_IT'=>1,'level'=>2],
            ['employee_name'=>'Sub Lít Đờ Đà Nẵng','name'=>'sub_leader_dn','password'=>bcrypt('123456'),'bo_phan_IT'=>2,'level'=>2],
            ['employee_name'=>'MEMBER Hà Nội','name'=>'member_hn','password'=>bcrypt('hungcan1997TB'),'bo_phan_IT'=>1,'level'=>3],
            ['employee_name'=>'MEMBER ĐÀ NẴNG','name'=>'member_dn','password'=>bcrypt('hungcan1997TB'),'bo_phan_IT'=>2,'level'=>3]
        ]);
    }
}
