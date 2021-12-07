<?php

namespace Database\Seeders;

use Database\Factories\PetitionFactory;
use Illuminate\Database\Seeder;

class PetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PetitionFactory::times(50)->create();
    }
}
