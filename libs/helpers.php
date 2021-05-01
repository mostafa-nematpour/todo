<?php

function getCurrentUrl()
{
    return 1;
}


function diePage($msg, $titel="Error")
{
    include_once "./tpl/tpl-die.php";
    die();
}
