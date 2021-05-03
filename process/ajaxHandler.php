<?php
include_once "../bootstrap/init.php";

if (!isAjaxRequest()) {
    diePage("Invalid Request", "Access denied");
}
if (!isset($_POST['action']) || empty($_POST['action'])) {
    diePage("Invalid Action", "Access denied");
}
switch ($_POST['action']) {
    case 'addFolder':
         if(!isset($_POST['folderName'])|| strlen($_POST['folderName'])<3 ){
            echo "Folder name must be longer than two letters";
            die();
        }
        echo addFolder($_POST['folderName']);
        break;
    case 'addTask':

        break;

    default:
        diePage("Invalid Action", "Access denied");
}


