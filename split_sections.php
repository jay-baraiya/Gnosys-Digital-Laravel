<?php
$html = file_get_contents('reference.html');
$doc = new DOMDocument();
@$doc->loadHTML($html);
$xpath = new DOMXPath($doc);
$sections = $xpath->query('//section');
foreach($sections as $idx => $s) {
    file_put_contents('section_'.$idx.'.html', $doc->saveHTML($s));
}
echo "Done saving sections.";
