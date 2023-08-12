<?php
$host = 'localhost';   // Ou o endereço IP do servidor local
$dbname = 'usuarios';
$username = 'root';    // Substitua pelo seu nome de usuário do banco de dados
$password = '';        // Substitua pela sua senha do banco de dados
$db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password); 
