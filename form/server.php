<?php 

// print_r($_POST);

if($_POST['text']) {
    $id = uniqid();
    $input = $_POST['text'];
    $content = [$id => $input];
    $content = json_encode($content);
    $result = file_put_contents('data.json', $content, FILE_APPEND);
    echo "Data is added successfully";
}