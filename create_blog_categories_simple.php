<?php

// Simple database connection and insert blog categories
$host = 'localhost';
$dbname = 'gnosys_digital';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected to database successfully\n\n";
    
    // Blog categories to create
    $categories = [
        ['name' => 'Digital Marketing', 'slug' => 'digital-marketing', 'type' => 'blog', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ['name' => 'Web Development', 'slug' => 'web-development', 'type' => 'blog', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ['name' => 'SEO', 'slug' => 'seo', 'type' => 'blog', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ['name' => 'E-commerce', 'slug' => 'ecommerce', 'type' => 'blog', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ['name' => 'Business Growth', 'slug' => 'business-growth', 'type' => 'blog', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ['name' => 'Technology', 'slug' => 'technology', 'type' => 'blog', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ['name' => 'Social Media', 'slug' => 'social-media', 'type' => 'blog', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ['name' => 'Content Marketing', 'slug' => 'content-marketing', 'type' => 'blog', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
    ];
    
    // Insert categories
    $stmt = $pdo->prepare("INSERT INTO categories (name, slug, type, created_at, updated_at) VALUES (?, ?, ?, ?, ?)");
    
    foreach ($categories as $cat) {
        try {
            $stmt->execute([$cat['name'], $cat['slug'], $cat['type'], $cat['created_at'], $cat['updated_at']]);
            echo "Created category: {$cat['name']}\n";
        } catch (Exception $e) {
            echo "Error creating {$cat['name']}: " . $e->getMessage() . "\n";
        }
    }
    
    echo "\nBlog categories created successfully!\n";
    
    // Verify creation
    $stmt = $pdo->query("SELECT * FROM categories WHERE type = 'blog'");
    $createdCategories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "\nVerification - Created categories:\n";
    foreach ($createdCategories as $cat) {
        echo "- ID: {$cat['id']}, Name: {$cat['name']}, Slug: {$cat['slug']}\n";
    }
    
} catch(PDOException $e) {
    echo "Database connection failed: " . $e->getMessage() . "\n";
}
?>
