<?php

$json_string = file_get_contents($_SERVER['DOCUMENT_ROOT'].'Mesozoic/models/posts.json'); 
$arr = json_decode($json_string, TRUE, 3);
 

function articles_all() {
    global $arr;
    
    return $arr;
}

function articles_get($id) {
    global $arr;
    
    return $arr[$id-1];
}

function articles_new($date, $title, $content) {
    global $arr;

    $arr[count($arr)] = [
        "id" => count($arr)+1,
        "date" => $date,
        "title" => $title,
        "content" => $content];
        
    file_put_contents($_SERVER['DOCUMENT_ROOT'].'Mesozoic/models/posts.json',json_encode($arr));
        
    return true;
}

function articles_edit($id, $title, $date, $content) {
    
}

function articles_delete($id) {
    
}



