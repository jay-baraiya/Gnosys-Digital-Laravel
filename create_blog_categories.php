<?php

// Create blog categories if they don't exist
require_once 'bootstrap/app.php';

use App\Models\Category;
use Illuminate\Support\Facades\DB;

try {
    // Check if blog categories exist
    $blogCategories = Category::where('type', 'blog')->get();
    
    echo "Current blog categories: " . $blogCategories->count() . "\n";
    
    if ($blogCategories->count() === 0) {
        echo "Creating blog categories...\n";
        
        // Create some default blog categories
        $categories = [
            ['name' => 'Digital Marketing', 'slug' => 'digital-marketing', 'type' => 'blog'],
            ['name' => 'Web Development', 'slug' => 'web-development', 'type' => 'blog'],
            ['name' => 'SEO', 'slug' => 'seo', 'type' => 'blog'],
            ['name' => 'E-commerce', 'slug' => 'ecommerce', 'type' => 'blog'],
            ['name' => 'Business Growth', 'slug' => 'business-growth', 'type' => 'blog'],
            ['name' => 'Technology', 'slug' => 'technology', 'type' => 'blog'],
        ];
        
        foreach ($categories as $cat) {
            Category::create($cat);
            echo "Created: " . $cat['name'] . "\n";
        }
        
        echo "Blog categories created successfully!\n";
    } else {
        foreach ($blogCategories as $cat) {
            echo "- " . $cat->name . " (slug: " . $cat->slug . ")\n";
        }
    }
    
    // Check blogs
    $blogsCount = DB::table('blogs')->where('is_published', true)->count();
    echo "\nPublished blogs: " . $blogsCount . "\n";
    
    // Check if blogs have category_id
    $blogsWithCategories = DB::table('blogs')->whereNotNull('category_id')->where('is_published', true)->count();
    echo "Blogs with categories: " . $blogsWithCategories . "\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
