<?php 
    require_once '../database.php';
    require_once '../models/articles.php';
    
    //$link = db_connect();
    
    $action = isset($_GET['action']) ? 
        $_GET['action'] : "";
            
    if ($action == "add") {
        if (!empty($_POST)) {
            articles_new($_POST['title'], $_POST['date'], $_POST['content']);
            header("Location: index.php");
        }
        include "../views/addForm_admin.php";        
    }
    else {    
        $articles = articles_all();    
        include "../views/articles_admin.php";        
    }