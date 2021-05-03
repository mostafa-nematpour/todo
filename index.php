<?php
include "bootstrap/init.php";

use Hekmatinasser\Verta\Verta;

// var_dump($v = new Verta());
if (isset($_GET['delete_folder']) && is_numeric($_GET['delete_folder'])) {
    $d = deleteFolder($_GET['delete_folder']);
    echo $d;
}
$folders = getFolders();
$tasks = getTasks();
include "tpl/tpl-index.php";
