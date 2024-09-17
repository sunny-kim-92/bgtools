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
        $this->call(MinionTypeSeeder::class);
        $this->call(KeywordSeeder::class);
        $this->call(HeroSeeder::class);
        $this->call(MinionSeeder::class);
        $this->call(QuestSeeder::class);
        $this->call(RewardSeeder::class);
        $this->call(SpellSeeder::class);
        $this->call(TrinketSeeder::class);
    }
}
