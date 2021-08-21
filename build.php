<?php
include "config.php";

for ($i = 0; $i < 30; $i++) {
    $get_title = file_get_contents("http://loripsum.net/api/1/short/plaintext", true);
    $title = substr($get_title, 0, 60);
    $content = file_get_contents("http://loripsum.net/api/" . rand(0, 9) . "/short/plaintext", true);
    $time = time();
    $query = "INSERT INTO `blog_post` (title,content,post_date) VALUES ('".$title."','".$content."','".$time."')";
    $conn->query($query);
}
