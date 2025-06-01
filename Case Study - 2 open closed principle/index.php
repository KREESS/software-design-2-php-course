<?php

include_once "DBMS.php";
include_once "DBMSConnection.php";
include_once "MySQL.php";
include_once "MongoDB.php";

$mysql = new MySQL();
$mysqlConnection = new DBMSConnection();
$mysqlConnection->connectToDB($mysql);

echo "<br>";

$mongoDB = new MongoDB();
$mongoDBConnection = new DBMSConnection();
$mongoDBConnection->connectToDB($mongoDB);
