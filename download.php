<?php
$html = file_get_contents('https://gnosysdigital.com/seo-services-gnosys-digital/');
file_put_contents('seo_page_source.html', $html);
echo "Done";
