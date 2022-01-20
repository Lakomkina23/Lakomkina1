<?php
session_start();
$user = 'root'; $password = '';
$pdo = new Pdo('mysql:dbname=fullstack_gd;host=127.0.0.1;port=3306', $user, $password);

