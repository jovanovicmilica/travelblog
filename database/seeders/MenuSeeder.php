<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("menu")->insert([
            ['name'=>'Home','route'=>''],
            ['name'=>'Blog','route'=>'blog'],
            ['name'=>'About','route'=>'about'],
            ['name'=>'Contact','route'=>'contact']
        ]);
    }
}