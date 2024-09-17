<?php

namespace Database\Seeders;

use App\Models\MinionType;
use Illuminate\Database\Seeder;

class MinionTypeSeeder extends Seeder
{
    private $minion_types = [
        [
            'name' => 'All',
        ],
        [
            'name' => 'Beast',
        ],
        [
            'name' => 'Demon',
        ],
        [
            'name' => 'Dragon',
        ],
        [
            'name' => 'Elemental',
        ],
        [
            'name' => 'Mech',
        ],
        [
            'name' => 'Murloc',
        ],
        [
            'name' => 'Naga',
        ],
        [
            'name' => 'Pirate',
        ],
        [
            'name' => 'Quilboar',
        ],
        [
            'name' => 'Undead',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->minion_types as $minion_type) {
            MinionType::create([
                'name' => $minion_type['name'],
            ]);
        }
    }
}
