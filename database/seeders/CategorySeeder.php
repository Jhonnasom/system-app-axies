<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->createMany([
            ['name'=> 'Art'],
            ['name'=> 'Music'],
            ['name'=> 'Domain Names'],
            ['name'=> 'Virtual Worlds'],
            ['name'=> 'Trading Cards'],
            ['name'=> 'Collectibles'],
            ['name'=> 'Sports'],
            ['name'=> 'Utility']
        ]);
    }
}
