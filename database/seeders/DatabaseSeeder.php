<?php

namespace Database\Seeders;

use App\Models\Models\Comment;
use App\Models\Models\Question;
use App\Models\User;
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
        User::factory(200)->create();
        Question::factory(200)->create();
        Comment::factory(200)->create();
        $this->call(CategorySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(OpportunitySeeder::class);
    }
}
