<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['role_name'=>"Quản trị viên",'role_rank'=>1],
            ['role_name'=>"Kiểm duyệt viên",'role_rank'=>2],
            ['role_name'=>"Thành viên",'role_rank'=>3],
            ['role_name'=>"Tù nhân",'role_rank'=>4],

        ];
        foreach ($roles as $key => $value) {
            DB::table('roles')->insert($value);
        }
    }
}
