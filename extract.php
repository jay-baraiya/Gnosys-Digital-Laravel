<?php
$html = file_get_contents("scratch-channel.html");
preg_match_all("/<link[^>]*rel=[\"\']stylesheet[\"\'][^>]*href=[\"\']([^\"\']+)[\"\'][^>]*>/is", $html, $matches);
foreach ($matches[1] as $href) {
    if (strpos($href, 'elementor') !== false || strpos($href, 'post-') !== false) {
        echo $href . "\n";
    }
}

$doc = new DOMDocument();
@$doc->loadHTML($html);
$xpath = new DOMXPath($doc);

$bodyNodes = $xpath->query("//body");
if ($bodyNodes->length > 0) {
    $body = $bodyNodes->item(0);
    $contentNodes = [];
    foreach ($body->childNodes as $child) {
        if ($child->nodeName == 'div' && strpos($child->getAttribute('class'), 'elementor') !== false && strpos($child->getAttribute('class'), 'elementor-location-header') === false && strpos($child->getAttribute('class'), 'elementor-location-footer') === false) {
            $contentNodes[] = $child;
        }
    }
    $mainContent = '';
    foreach ($contentNodes as $node) {
        $mainContent .= $doc->saveHTML($node) . "\n";
    }
    if (empty($mainContent)) {
        $container = $xpath->query("//div[contains(@class, 'elementor-page')]")->item(0);
        if ($container) {
            $mainContent = $doc->saveHTML($container);
        }
    }
    file_put_contents("scratch-main-content.html", $mainContent);
    echo "Saved main content of length " . strlen($mainContent) . "\n";
}
