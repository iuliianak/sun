<?php
include ('vendor/autoload.php');
$planeta= new \Space\Planeta('Юпитер');
echo $planeta->name;
$content=new GuzzleHttp\Client();
$response = $content->get('https://itea.ua/');
echo $response->getBody()->getContents();