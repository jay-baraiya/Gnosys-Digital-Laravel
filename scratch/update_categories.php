<?php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Category;
use Illuminate\Support\Str;

$categories = [
    'Custom Development',
    'Digital Marketing',
    'eCommerce Development',
    'SEO & Content',
    'Server & Devops',
    'Web & App Development'
];

foreach ($categories as $name) {
    Category::updateOrCreate(
        ['slug' => Str::slug($name), 'type' => 'service'],
        ['name' => $name]
    );
}

echo "Categories updated successfully.\n";
