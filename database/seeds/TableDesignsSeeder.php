<?php

use Illuminate\Database\Seeder;

class TableDesignsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        INSERT INTO `designs` (`id`, `user_id`, `status`, `client`, `client_phone`, `size`, `base_color`, `image`, `type`, `audience`, `title`, `tagline`, `lecturer`, `book`, `place`, `date`, `time`, `organizer`, `contact`, `donation`, `is_meal`, `is_streaming`, `add_info`, `created_at`, `updated_at`) VALUES (NULL, NULL, 'open', 'client test', 'client test phone', 'client test size', 'client test color', 'client test image', 'kajian rutin', 'client test audience', 'client test title', 'client test tagline', 'client test lecturer', 'client test book', 'client test place', '2019-01-15', '18:00:00', 'client test organizer', 'client test contact', 'client test donation', '1', '0', 'client test add info', NULL, NULL);
    }
}
