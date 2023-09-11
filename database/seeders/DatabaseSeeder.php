<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user1 = \App\Models\SlackUser::factory()
            ->hasMessages(5)
            ->create();
        $user2 = \App\Models\SlackUser::factory()
            ->hasMessages(5)
            ->create();
    }
}
