<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolutionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'ERPNext Implementation',
            'Channel & Distribution',
            'Custom Manufacturing',
            'Custom Warehouse & Inventory',
            'Supply Chain & Logistics',
            'SEO Services',
            'Case Study',
            'Blog'
        ];

        foreach ($categories as $name) {
            \App\Models\Category::updateOrCreate(
                ['name' => $name, 'type' => 'blog'],
                ['slug' => \Illuminate\Support\Str::slug($name)]
            );
        }
    }
}
