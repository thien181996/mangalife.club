<?php

use Illuminate\Database\Seeder;

class SetupProjectSeeder extends Seeder
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

        $modules = [
            ['module_name'=>"panel/module"],
            ['module_name'=>"panel/dashboard"],
            ['module_name'=>"panel/panel/authen"],

        ];
        foreach ($modules as $key => $value) {
            DB::table('modules')->insert($value);
        }

        $module_action = [
            ['module_id'=>1,'action_name'=>"updateRoutes"],
            ['module_id'=>2,'action_name'=>"view"],
            ['module_id'=>3,'action_name'=>"login"],
            ['module_id'=>3,'action_name'=>"loginUser"],
            ['module_id'=>3,'action_name'=>"logOutUser"],
        ];
        foreach ($module_action as $key => $value) {
            DB::table('module_action')->insert($value);
        }

        $role_module = [
            ['module_id'=>1,'action_id'=>1,'role_id'=>1],
            ['module_id'=>2,'action_id'=>2,'role_id'=>1],
            ['module_id'=>3,'action_id'=>3,'role_id'=>1],
            ['module_id'=>3,'action_id'=>4,'role_id'=>1],
            ['module_id'=>3,'action_id'=>5,'role_id'=>1],

        ];
        foreach ($role_module as $key => $value) {
            DB::table('role_module')->insert($value);
        }

        $roles = [
            ['role_name'=>"Quản trị viên",'role_rank'=>1],
            ['role_name'=>"Kiểm duyệt viên",'role_rank'=>2],
            ['role_name'=>"Thành viên",'role_rank'=>3],
            ['role_name'=>"Bị khóa",'role_rank'=>4],

        ];
        foreach ($roles as $key => $value) {
            DB::table('roles')->insert($value);
        }

        $report_template = [
            ['template_name'=>"Báo lỗi"],
            ['template_name'=>"Góp ý"],
            ['template_name'=>"Liên hệ"],

        ];
        foreach ($report_template as $key => $value) {
            DB::table('report_template')->insert($value);
        }
    }
}
