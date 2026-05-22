<?php
$html=file_get_contents('reference.html');
$dom=new DOMDocument();
@$dom->loadHTML($html);
$xpath=new DOMXPath($dom);
$hs=$xpath->query('//h1 | //h2 | //h3 | //h4 | //p');
foreach($hs as $h) {
    if (strlen(trim($h->nodeValue)) > 0) {
        $class = $h->getAttribute('class');
        echo "<{$h->tagName} class='{$class}'>: " . trim($h->nodeValue) . "\n";
    }
}
