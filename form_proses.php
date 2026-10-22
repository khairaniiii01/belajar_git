<?php

$user = $_POST['username'];
$pass = $_POST['password'];

$koneksi = mysqli_connect('localhost', 'root', '', 'login');
$sql = "INSERT INTO form_login (username, password) VALUES ('$user','$pass')";
mysqli_query($koneksi, $sql);


