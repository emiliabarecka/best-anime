<?php
session_start();
require_once("app/env.php");
require_once("app/dump.php");
$db = new PDO("mysql:dbname={$dbname};host={$host};",$user,$password);

function getAnimes($db){
  return  $db->query("SELECT id,title,description_0 FROM animes");
}

$query = getAnimes($db);
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$db->connection = null;
$data = json_encode($results);

require_once('views/layout.php');



