<?php

use Illuminate\Database\Seeder;

class RoleModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_module = [
            ['module_id'=>1,'action_id'=>1,'role_id'=>1],
            ['module_id'=>1,'action_id'=>2,'role_id'=>1],
            ['module_id'=>1,'action_id'=>3,'role_id'=>1],
            ['module_id'=>1,'action_id'=>4,'role_id'=>1],

        ];
        foreach ($role_module as $key => $value) {
            DB::table('role_module')->insert($value);
        }
    }
}
