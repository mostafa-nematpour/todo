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

        if (!isset($_POST['folderName']) || strlen($_POST['folderName']) < 3) {
            echo "Folder name must be longer than two letters";
            die();
        }
        echo addFolder($_POST['folderName']);
        break;
    case 'addTask':
        // var_dump($_POST);
        $taskTitle = $_POST['taskTitle'] ?? "";
        $folderId = $_POST['folderId'];
        if (!isset($taskTitle) || strlen($taskTitle) < 3) {
            // echo "Task name must be longer than two letters";
            die();
        }

        if (!isset($folderId) || empty($folderId)) {
            // echo "folder id error";
            die();
        }

        echo addTask($taskTitle, $folderId);

        break;

    default:
        diePage("Invalid Action", "Access denied");
}
