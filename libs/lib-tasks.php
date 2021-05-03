<?php
function getFolders()
{
    global $PDO;
    $current_user_id = getCurrentUserId();
    try {
        $sql = "select * from folder where user_id= $current_user_id";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
    } catch (Exception $e) {
        diePage($e->getMessage(), "get Folder Faile");
    }
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;
}

function deleteFolder($folder_id)
{
    global $PDO;
    try {
        $sql = "delete from folder where id= $folder_id";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
    } catch (Exception $e) {
        diePage($e->getMessage(), "delete Folder Faile");
    }

    return $stmt->rowCount();
}

function addFolder($folderName)
{
    $current_user_id = getCurrentUserId();

    global $PDO;
    try {
        $sql = "INSERT INTO `folder` (`name`, `user_id`) VALUES (:folderName, :current_user_id);";
        $stmt = $PDO->prepare($sql);
        $stmt->execute([':folderName' => $folderName, ':current_user_id' => $current_user_id]);
    } catch (Exception $e) {
        diePage($e->getMessage(), "add Folder Faile");
    }

    return '{"response":'.$stmt->rowCount().',"id":'.$PDO->lastInsertId().'}';
}
function getTasks()
{
    return [1, 1, 2, 3, 4];
}
function addTasks()
{
    return [1, 1, 2, 3, 4];
}
function removeTasks()
{
    return [1, 1, 2, 3, 4];
}
