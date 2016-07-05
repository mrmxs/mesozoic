<?php 
    require_once '../database.php';
    require_once '../models/articles.php';
    
    //$link = db_connect();
    
    $action = isset($_GET['action']) ? 
        $_GET['action'] : "";
            
    if ($action == "add") {
        if (!empty($_POST)) {
            articles_new( $_POST['date'], $_POST['title'], $_POST['content']);
            header("Location: index.php");
        }
        include "../views/addForm_admin.php";        
    }
    elseif ($action == "edit") {
        if (!isset($_GET['id']))
            header("Location: index.php");
        $id = (int)$_GET['id'];
            
        if(!empty($_POST) && $id > 0) {
            articles_edit($id, $_POST['date'], $_POST['title'], $_POST['content']); 
            header("Location: index.php");           
        }
        
        $article = articles_get($id);
        include "../views/addForm_admin.php";        
    }
    else {    
        $articles = articles_all();    
        include "../views/articles_admin.php";        
    }