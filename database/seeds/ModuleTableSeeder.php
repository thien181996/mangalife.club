<?php

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            ['module_name'=>"module"],

        ];
        foreach ($modules as $key => $value) {
            DB::table('modules')->insert($value);
        }
    }
}
