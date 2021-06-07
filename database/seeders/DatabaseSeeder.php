<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->create(['name' => 'root', 'email' => 'root@root.com']);
        User::factory(10)->create();
        Event::factory(30)->create(["image" => "logo.png"]);
    }
}
