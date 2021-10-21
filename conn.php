<?php $host = 'localhost';
$user = 'root';
$pswd = "; #sepasang single quotes";
$dbname = 'contoh_login';

$conn = new mysqli($host, $ser, $pswd, $dbname);
session_start();