<?php

session_start();

$host = "localhost";
$base = "youtube";
$user = "root";
$pass = "";

$cn = mysqli_connect($host, $user, $pass, $base);
//$res = mysqli_query($cn, 'SELECT * FROM tabela');
//$itens = mysqli_fetch_all($res, MYSQLI_ASSOC);