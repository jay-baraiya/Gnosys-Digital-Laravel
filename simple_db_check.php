<?php

// Simple database connection and check
$host = 'localhost';
$dbname = 'gnosys_digital'; // Adjust if needed
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected to database successfully\n\n";
    
    // Check categories table
    $stmt = $pdo->query("SELECT * FROM categories WHERE type = 'blog'");
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "Blog categories found: " . count($categories) . "\n";
    foreach ($categories as $cat) {
        echo "- ID: {$cat['id']}, Name: {$cat['name']}, Slug: {$cat['slug']}\n";
    }
    
    echo "\n";
    
    // Check blogs table
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM blogs WHERE is_published = 1");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "Published blogs: " . $result['count'] . "\n";
    
    // Check blogs with categories
    $stmt = $pdo->query("SELECT b.title, c.name as category_name FROM blogs b LEFT JOIN categories c ON b.category_id = c.id WHERE b.is_published = 1 LIMIT 5");
    $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "\nSample blogs with categories:\n";
    foreach ($blogs as $blog) {
        echo "- {$blog['title']} (Category: " . ($blog['category_name'] ?? 'None') . ")\n";
    }
    
} catch(PDOException $e) {
    echo "Database connection failed: " . $e->getMessage() . "\n";
}
?>
