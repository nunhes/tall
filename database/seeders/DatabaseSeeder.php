<?php

namespace Database\Seeders;

use App\Models\Subscritor;
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
        // \App\Models\User::factory(10)->create();
        Subscritor::factory(10)->create();
    }
}
