<?php
include ('vendor/autoload.php');
$planeta= new \Space\Planeta('Земля');
echo "Планета ".$planeta->name."<br>\n";
$tree= new \Repo\Baum();
echo $tree->grow('10 m');
/*
 $content=new GuzzleHttp\Client();
$response = $content->get('https://itea.ua/');
echo $response->getBody()->getContents();
 */