<?php
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

    if (strpos($url,'politics') !== false) {
        $news = file_get_contents('https://rss.app/feeds/PJbZVoAh0UuIVSjP.xml');
    }
    else if (strpos($url,'sports') !== false) {
        $news = file_get_contents('https://rss.app/feeds/J5emS8DEsCzzWWGW.xml');
    }
    else if (strpos($url,'tech') !== false) {
        $news = file_get_contents('https://rss.app/feeds/7n6GgLL4I361K2J6.xml');
    }
    else if (strpos($url,'entertainment') !== false) {
        $news = file_get_contents('https://rss.app/feeds/cCVBGHkvdrogMofC.xml');
    }
    else if (strpos($url,'health') !== false) {
        $news = file_get_contents('https://rss.app/feeds/Zho1BRpNkCNy1i6u.xml');
    }
    else {
        $news = file_get_contents('https://rss.app/feeds/cA04q80qpW7zy9Ig.xml');

    }


    ini_set("display_errors",1);
    error_reporting(E_ALL);

$news_xml = new SimpleXMLElement($news);
$news_data = array();
$count = 0;
foreach($news_xml->channel->item as $item){
    $description = trim(str_replace('Breaking News:','',$item->description));
    $news_item = array(
        'content' => $item->description,
        'type' => 'twitter'
        );
    $count++;
    if($count > 10) {
        break;
    }
    array_push($news_data, $news_item);
}
