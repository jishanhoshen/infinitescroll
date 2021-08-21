<?php
include 'config.php';
$data = array();
$rows = array();

if(isset($_POST['iload'])){
    $vlimit = $_POST['iload'];
}else{
    $vlimit = 1;
}

if(isset($_POST['oset'])){
    $oset = $_POST['oset'];
}else{
    $oset = 0;
}


$data['vlimit'] = $vlimit;
$data['oset'] = $oset;

$query = "SELECT * FROM `blog_post` ORDER BY id ASC LIMIT ".$vlimit." OFFSET ".$oset;
$result = $conn->query($query);
while($row = $result->fetch_assoc()){
    $rows[] = array(
        "id" => $row['id'],
        "title" => $row['title'],
        "content" => $row['content'],
        "post_date" => $row['post_date']
    );
}

$data['post'] = $rows;

echo json_encode($data);