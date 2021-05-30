<?php

function login($user, $password)
{
    return 1;
}

function isLoggedIn()
{
    return false;
}
function register($data)
{

    global $PDO;
    #valid Email , valid userNmae
    $passhash = password_hash($data['password'], PASSWORD_BCRYPT);
    try {
        $sql = "INSERT INTO `users` (`name`, `email`,`password`) VALUES (:name, :email, :password);";
        $stmt = $PDO->prepare($sql);
        $stmt->execute([':name' => $data['username'], ':email' => $data['email'], ':password' => $passhash]);
    } catch (Exception $e) {
        diePage($e->getMessage(), "add Folder Faile");
    }


    return $stmt->rowCount() ? true : false;
}

function getCurrentUserId()
{
    return 1;
}
