<?php
$page = $_GET['request'] ?? 'index';
switch ($page) {
    case 'heroes':
        require_once('views/heroes.php');
        break;

    case 'add-anime':
        if($_SESSION['admin'] == true){
            require_once('views/add-anime.php');
            break;
        } else {
            header('Location: ' . 'index.php');
        }

    case 'check-login':
        require('base.php');
        break;

    case 'save':
    case 'edit':
    case 'update':
    case 'del': 
    
        if($_SESSION['admin'] == true){       
            require('base.php');
            break; 
        } else {
            header('Location:index.php');
        }
        
    case 'list-animes':
        if($_SESSION['admin'] == true){       
            require('views/list-animes.php');
            break; 
        }else{
            header('Location:index.php');
        }
        
    case 'log-in':
        require_once('views/log-in.php');
        break;

    default: 
        require_once('views/show-all.php');
        break;
} 