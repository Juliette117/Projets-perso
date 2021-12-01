<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Category;
use App\Models\Articleseries;
use Illuminate\Database\Seeder;

class ArticleseriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i = 0; $i < 20; $i++) {
            Articleseries::create([
                'title' => $faker->sentence(),
                'subtitle' => $faker->sentence(),
                'content' => $faker->text($maxNbChars = 600),
                'category_id' => Category::inRandomOrder()->first()->id
            ]);
        }
        

        
    }
}
