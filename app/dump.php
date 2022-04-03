<?php
function dump($die = true){
    echo "<pre>GET: ";
        print_r($_GET);
    echo "</pre>"; 
    echo "<pre>POST: ";
        print_r($_POST);
    echo "</pre>";
    echo "<pre>SESSION: ";
        print_r($_SESSION);
    echo "</pre>";
    
    if($die){
        die();
    }
}
?>