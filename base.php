<?php
date_default_timezone_set('Asia/Taipei');
session_start();

function pdo(){

    $dsn="mysql:host=localhost;charset=utf8;dbname=resume";
    $pdo=new PDO($dsn,'root','',[]);
    
}
?>






    
