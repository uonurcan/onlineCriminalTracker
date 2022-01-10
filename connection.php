<?php
/*
$host = "localhost";
$dbase = "bugsens";
$user = "db";
$pd = "db";
$db = new mysqli($host, $user, $pd, $dbase);

if ($db->connect_error) {
   exit('Connect Error (' . $db->connect_errno . ') ' . $db->connect_error);
}
*/

 //00WEBHOST CONFS
$host = "localhost";
$dbase = "id18188715_bugsens";
$user = "id18188715_bugsensadmin"; 
$pd = '9ZJj5l722ersQi#h';
$db =mysqli_connect($host, $user, $pd, $dbase);

if ($db->connect_error) {
   exit('Connect Error (' . $db->connect_errno . ') ' . $db->connect_error);
}
