<?php


try {
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION; 
 $cnx = new PDO('mysql:host=localhost;dbname=intervention','root','',$pdo_options); 
 $cnx->exec("set names utf8");
 } catch (Exception $e) {  
  die('Erreur '.$e->getMessage());
 } 
?>

