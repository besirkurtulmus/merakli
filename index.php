<?php
    require 'Vendor/autoload.php';
    require 'Config/config.inc.php';
    require 'Lib/App.php';
    session_start();
    
    $app = new \Midori\Cms\App();
    $app->connect($config['db']['host'],$config['db']['username'],$config['db']['password'],$config['db']['dbname']);

    if(strpos($_SERVER['REQUEST_URI'],$_SERVER['SCRIPT_NAME'])!==false){
        $request = str_replace($_SERVER['SCRIPT_NAME'], "", $_SERVER['REQUEST_URI']);
    }
    else{
        $request = "/Posts/";
    }

    if(!empty($_POST))
    {
        $data = $_POST;
    }
    elseif(!empty($_FILES))
    {
        $data = $_FILES;
    }
    else{
        $data = "";
    }
    if(empty($request)){
        $request = "/Posts/";
    }
    echo $app->calculate($request,$data);
    
?>