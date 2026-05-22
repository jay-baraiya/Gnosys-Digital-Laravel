<?php
$html = file_get_contents('scratch-main-content.html');
$css = '<link rel="stylesheet" href="/css/elementor-frontend.css"><link rel="stylesheet" href="/css/elementor-post-6.css"><link rel="stylesheet" href="/css/channel-page.css">';
$content = "@extends('layouts.app')\n\n@section('title', 'Channel & Distribution Management Software Development - Gnosysdigital')\n\n@section('content')\n" . $css . "\n" . $html . "\n@endsection\n";
file_put_contents('resources/views/channel-distribution-management-software-development.blade.php', $content);
echo "Blade updated!\n";
