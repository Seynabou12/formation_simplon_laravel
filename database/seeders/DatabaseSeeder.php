<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Formation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory(5)->create();
            User::factory(10)->create()->each(function ($user) use ($categories){
                Formation::factory(rand(1, 3))->create([
                    'user_id' => $user -> id,
                    'category_id' => ($categories->random(1)->first())->id
                ]);
            });
    }
}
