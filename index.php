<?php
include "bootstrap/init.php";
use Hekmatinasser\Verta\Verta;
var_dump($v = new Verta());


$tasks = getTasks();
include "tpl/tpl-index.php";