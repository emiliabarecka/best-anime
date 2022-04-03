<?php

if($_GET['request'] === 'save'){
    $title = $_POST['title'];
    $desc = $_POST['description_0'];    
    
    if(!empty($title) && !empty($desc)){
        $sql = "INSERT INTO animes(title, description_0) VALUES('$title', '$desc')";
        $add = $db->prepare($sql);
        $add->execute();
       
        $_SESSION['added'] = "Dodano anime o tyule " . $title;
        unset($title);
        unset($desc);
        require_once('views/list-animes.php');
    }
    else{
        echo 'dodaj tytul i opis';
        require_once('views/add-anime.php');
    }
}
elseif($_GET['request'] === 'edit'){
    
    require_once('views/edit-animes.php');
}
elseif ($_GET['request'] === 'update'){
    $desc = $_POST['description_0'];
    $id = $_POST['id'];
    $title = $_POST['title'];
    $sql = "UPDATE animes SET description_0 = '$desc', title = '$title' WHERE id = '$id' ";

    $add = $db->prepare($sql);
    $add->execute();
    unset($id);
    unset($desc);
    unset($title);
    require_once('views/list-animes.php');
    
}
elseif($_GET['request'] === 'del'){
    $id = $_POST['id'];
    
    $sql = "DELETE FROM animes WHERE id = '$id'";
    $del = $db->prepare($sql);
    $del->execute();
    $_SESSION['deleted'] = "usunieto anime o id " . $id;
    unset($id);
    require_once('views/list-animes.php');
}elseif($_GET['request'] === 'check-login'){
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $sql = "SELECT name, password FROM users WHERE name = '$login' AND password ='$pass'";

    function check($sql,$db){
        return  $db->query($sql);
      }
      
      $query = check($sql,$db);
      $results = $query->fetch(PDO::FETCH_ASSOC);
      if(!empty($results)){
          $_SESSION['admin'] = true;
          header('Location:index.php');
          
      }else{
          $_SESSION['admin'] = false;
          header('Location: index.php?request=log-in');
      }
      $db->connection = null;
      
    
}

?>