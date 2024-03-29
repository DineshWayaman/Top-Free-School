<?php
include('config/dbconfig.php');

$base_url = "http://localhost/topfreeschool";

header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL; 

echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;


$getUrl = "SELECT * FROM `posts`";
$getUrl = $conn->prepare($getUrl);
$getUrl->execute();
$urlrow = $getUrl->rowCount();

while ($urlrow = $getUrl->fetch()) {
    echo '<url>' . PHP_EOL;
    echo '<loc>'.$base_url. $urlrow["p_slug"] .'/</loc>' . PHP_EOL;
    echo '<changefreq>daily</changefreq>' . PHP_EOL;
    echo '</url>' . PHP_EOL;
}

echo '</urlset>' . PHP_EOL;