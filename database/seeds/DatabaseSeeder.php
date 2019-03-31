<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Models\Client::class, 9)->create();
        factory(App\Models\Lecture::class, 9)->create();
        factory(App\Models\Manager::class)->create();
    }
}
