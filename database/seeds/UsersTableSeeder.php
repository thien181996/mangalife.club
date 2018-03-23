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
        $users = [
            ['username'=>'admin', 'email'=>'admin@localhost.com','password'=>Hash::make(123456),'avatar'=>'/img/avatar.jpg','created_at'=>new DateTime,'updated_at'=>new DateTime],
            ['username'=>'root', 'email'=>'root@localhost.com','password'=>Hash::make(123456),'avatar'=>'/img/avatar.jpg','created_at'=>new DateTime,'updated_at'=>new DateTime],

        ];
        foreach ($users as $key => $value) {
            DB::table('users')->insert($value);
        }
    }
}
