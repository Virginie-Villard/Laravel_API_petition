<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @var AuthorSeeder
     */
    private $authorSeeder;

    /**
     * @var PetitionSeeder
     */
    private $petitionSeeder;

    public function __construct(AuthorSeeder $authorSeeder, PetitionSeeder $petitionSeeder)
    {
        $this->authorSeeder = $authorSeeder;
        $this->petitionSeeder = $petitionSeeder;
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->authorSeeder->run();
        $this->petitionSeeder->run();
    }
}
