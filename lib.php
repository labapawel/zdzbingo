<?php

session_start();
foreach(file('.env') as $item)
    {
        $env = explode("=", $item);
        $_ENV[$env[0]]=$env[1];
    }
 
 
 
 
 $db = new mysqli('localhost',$_ENV['db'],$_ENV['pass'],$_ENV['db']);