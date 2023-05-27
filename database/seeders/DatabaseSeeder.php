<?php

namespace Database\Seeders;

//テストデータを作るためにPracticeにデータを受け渡す
use App\Practice;
use App\Models\Movie;
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
        Practice::factory(10)->create();
        Movie::factory(10)->create();
    }
}
