<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Beans',
            'slug' => 'beans',
            'image' => 'Assets/images/banner-01.jpg'
        ]);

        Category::create([
            'name' => 'Powder',
            'slug' => 'powder',
            'image' => 'Assets/images/banner-02.jpg'
        ]);
    }
}
