<?php

use Illuminate\Database\Seeder;
use App\Admin;

class TableAdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
        	'name' => 'multimedia',
        	'email' => 'm@m.com',
        	'password' => bcrypt('multimedprogram'),


        ]);
    }
}
