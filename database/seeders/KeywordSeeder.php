<?php

namespace Database\Seeders;

use App\Models\Keyword;
use Illuminate\Database\Seeder;

class KeywordSeeder extends Seeder
{
    private $keywords = [
        [
            'name' => 'Avenge',
        ],
        [
            'name' => 'Battlecry',
        ],
        [
            'name' => 'Blood Gem',
        ],
        [
            'name' => 'Deathrattle',
        ],
        [
            'name' => 'Discover',
        ],
        [
            'name' => 'Divine Shield',
        ],
        [
            'name' => 'Immune',
        ],
        [
            'name' => 'Magnetic',
        ],
        [
            'name' => 'Pass',
        ],
        [
            'name' => 'Poisonous',
        ],
        [
            'name' => 'Reborn',
        ],
        [
            'name' => 'Refresh',
        ],
        [
            'name' => 'Spellcraft',
        ],
        [
            'name' => 'Stealth',
        ],
        [
            'name' => 'Taunt',
        ],
        [
            'name' => 'Venomous',
        ],
        [
            'name' => 'Windfury',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->keywords as $keyword) {
            Keyword::create([
                'name' => $keyword['name'],
            ]);
        }
    }
}
