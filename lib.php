<?php

session_start();
foreach(file('.env') as $item)
    {
        $env = explode("=", $item);
        $_ENV[$env[0]]=trim($env[1]);
    }
 
 
//  echo $_ENV['db'].$_ENV['pass'];
 
 $db = new mysqli('localhost',$_ENV['db'],$_ENV['pass'],$_ENV['db']);

 echo $_SESSION['usernnameid'];