<?php
include "bootstrap/init.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_GET['action'];
    $params = $_POST;
    if ($action == 'register') {
        $result = register($params);
        if(!$result){
            echo "ERROR";
        }else{
            echo "ok";

        }
    } elseif ($action == 'login') {
        $result = login($params['email'], $params['password']);
        if(!$result){
            echo "user Email or Password is Incorrest!";
        }
    }
    //var_dump($result);
}


include "tpl/tpl-auth.php";
