<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\DigitalProduct;
use App\Models\DigitalService;
use Illuminate\Support\Str;

class CategoryDataSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Digital Product Categories
        $productCategories = ['Templates', 'Tools', 'AI Tools', 'eBooks', 'Guides', 'Hosting', 'Marketing', 'WordPress'];
        foreach ($productCategories as $name) {
            Category::firstOrCreate(
                ['slug' => Str::slug($name), 'type' => 'product'],
                ['name' => $name]
            );
        }

        // 2. Digital Service Categories
        $serviceCategories = ['Web Development', 'Design', 'Marketing', 'SEO', 'Automation'];
        foreach ($serviceCategories as $name) {
            Category::firstOrCreate(
                ['slug' => Str::slug($name), 'type' => 'service'],
                ['name' => $name]
            );
        }

        // 3. Link existing products to categories
        foreach (DigitalProduct::all() as $product) {
            $cat = Category::where('name', $product->category)->first();
            if ($cat) {
                $product->update(['category_id' => $cat->id]);
            }
        }
        
        // 4. Link existing services to categories
        // (If services have a string 'category' field, link them similarly)
        foreach (DigitalService::all() as $service) {
            // Assuming default category if none found
            $cat = Category::where('type', 'service')->first();
            $service->update(['category_id' => $cat->id]);
        }
    }
}
