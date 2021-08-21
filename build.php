<?php
include "config.php";

$build_item = 100;

$img_url = "https://picsum.photos/v2/list?page=2&limit=".$build_item;
$unsplash = json_decode(file_get_contents($img_url),true);

for ($i = 0; $i < $build_item; $i++) {
    $get_title = file_get_contents("http://loripsum.net/api/1/short/plaintext", true);
    $title = substr($get_title, 0, 60);
    $content = file_get_contents("http://loripsum.net/api/" . rand(0, 9) . "/short/plaintext", true);
    $time = time();
    $image = $unsplash[$i]['download_url'];
    $query = 'INSERT INTO `blog_post` (title,content,post_date,img) VALUES ("'.$title.'","'.$content.'","'.$time.'","'.$image.'")';
    $conn->query($query);
    // echo $query;
}
