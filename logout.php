<?php
    include_once "user/usersesion.php";

    $userSession = new UserSession();
    $userSession->closeSession();

    header('Location: iniciarsesion.php?id=1');
?>