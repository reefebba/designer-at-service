<?php

use Illuminate\Database\Seeder;
use App\Models\Designer;

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
        $manager = new Designer;
        $manager->name = 'PM';
        $manager->email = 'admin@gmail.com';
        $manager->email_verified_at = now();
        $manager->password = 'akromleo';
        $manager->can = 'manage';
        $manager->save();
    }
}
