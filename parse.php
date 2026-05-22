<?php
$html = file_get_contents('reference.html');
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

function extractStyles($node) {
    if (!$node || !($node instanceof DOMElement)) return [];
    $styles = [];
    $classes = $node->getAttribute('class');
    if ($classes) $styles['class'] = $classes;
    $style = $node->getAttribute('style');
    if ($style) $styles['style'] = $style;
    return $styles;
}

$sections = $xpath->query('//section');
foreach ($sections as $i => $section) {
    echo "--- Section $i ---\n";
    echo "Classes: " . $section->getAttribute('class') . "\n";
    $h = $xpath->query('.//h1 | .//h2 | .//h3 | .//h4 | .//h5 | .//h6', $section);
    if ($h->length > 0) {
        echo "Headings: ";
        foreach($h as $heading) {
            echo trim(preg_replace('/\s+/', ' ', $heading->nodeValue)) . " | ";
        }
        echo "\n";
    }
    
    // some notable divs or elements
    // Images
    $imgs = $xpath->query('.//img', $section);
    if ($imgs->length > 0) {
        echo "Images: " . $imgs->length . "\n";
        foreach($imgs as $img) {
            echo "  - " . $img->getAttribute('src') . "\n";
        }
    }
    
    // buttons / links
    $links = $xpath->query('.//a', $section);
    if ($links->length > 0) {
        foreach($links as $link) {
            $class = $link->getAttribute('class');
            if (strpos($class, 'button') !== false || strpos($class, 'btn') !== false || strpos($class, 'elementor-button') !== false) {
                echo "Button: " . trim($link->nodeValue) . " (Class: $class)\n";
            }
        }
    }
    
    // bg image
    $bgData = $section->getAttribute('data-bg');
    if ($bgData) {
        echo "Data BG: " . $bgData . "\n";
    }
    
    echo "Summary Text (first 100 chars): " . substr(preg_replace('/\s+/', ' ', trim($section->nodeValue)), 0, 100) . "\n\n";
}
