<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'name' => 'home',
            'link' => 'home',
            'keyword' => 'home',
            'description' => 'home',
            'active' => '1',
        ]);
    }
}
