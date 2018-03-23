<?php

use Illuminate\Database\Seeder;

class ModuleActionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $module_action = [
            ['module_id'=>1,'action_name'=>""],
            ['module_id'=>1,'action_name'=>"create"],
            ['module_id'=>1,'action_name'=>"edit"],
            ['module_id'=>1,'action_name'=>"delete"],
        ];
        foreach ($module_action as $key => $value) {
            DB::table('module_action')->insert($value);
        }
    }
}
