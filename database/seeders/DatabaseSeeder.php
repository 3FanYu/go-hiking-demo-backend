<?php

namespace Database\Seeders;

use App\Models\Collection;
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
        $this->call(CountiesTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(TrailsTableSeeder::class);
        $this->call(CollectionsTableSeeder::class);
        $this->call(CollectionTrailTableSeeder::class);
    }
}
