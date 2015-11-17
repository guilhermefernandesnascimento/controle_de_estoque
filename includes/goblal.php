<?php
session_start()

function conexao () {
    $uper = "root";
    $passwd = "usbw";
    $dbname = "estoque";
    $host = "127.0.0.1:3307";
    $pdo = new PDO("myasql:host=127.0.0.1:dbname=($dbname)", $user, $passwd);
    return $pdo;
}
