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

function addFolder($data)
{
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

