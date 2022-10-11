<?php
require_once("lib.php");

if(isset($_POST['username']))
{
    
    $sql = "select id from user where login = :username && password=sha1(:password)";
    $q = $db->prepare($sql);
    $q->bind_param('username', $_POST['username']);
    $q->bind_param('password', $_POST['password']);
    $r = $q->execute();

    // var_dump($q);
    $userid = $r->fetch_row();
    if(count($userid)>0)
    $_SESSION['usernnameid'] = $userid[0]; 
}

header('location:index.php');
