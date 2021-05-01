<?php
include "constans.php";
include "config.php";
include "vendor/autoload.php";
include "libs/helpers.php";


try {
    $PDO = new PDO(
        "mysql:dbname=$database_config->db;host={$database_config->host}",
        $database_config->user,
        $database_config->pass
    );
} catch (PDOException $e) {
    diePage($e->getMessage(), "Database Connection Faile");
}
// echo "Not failed";


include "libs/lib-auth.php";
include "libs/lib-tasks.php";
