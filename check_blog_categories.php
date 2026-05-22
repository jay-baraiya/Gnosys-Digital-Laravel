<?php
require_once 'vendor/autoload.php';

use App\Models\Category;
use App\Models\Blog;

// Check if there are any blog categories in the database
echo "Checking blog categories...\n";

$categories = Category::where('type', 'blog')->get();

echo "Found " . $categories->count() . " blog categories:\n";
foreach ($categories as $category) {
    echo "- ID: {$category->id}, Name: {$category->name}, Slug: {$category->slug}\n";
}

echo "\nChecking blogs with categories...\n";

$blogs = Blog::with('category')->where('is_published', true)->get();

echo "Found " . $blogs->count() . " published blogs:\n";
foreach ($blogs as $blog) {
    if ($blog->category) {
        echo "- Blog: {$blog->title}, Category: {$blog->category->name}\n";
    } else {
        echo "- Blog: {$blog->title}, Category: None\n";
    }
}

echo "\nChecking all categories in database...\n";

$allCategories = Category::all();
echo "Total categories in database: " . $allCategories->count() . "\n";
foreach ($allCategories as $cat) {
    echo "- Type: {$cat->type}, Name: {$cat->name}\n";
}
?>
