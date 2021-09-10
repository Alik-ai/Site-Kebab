<?php
$connection = mysqli_connect('localhost', 'alikm', 'gyLx6upiqC7H3w==');
if (!$connection){               // ! = si ca ne se connecte pas, alors affiche ceci :
die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'alikm_sitekebab');
if (!$select_db){
die("Database Selection Failed" . mysqli_error($connection));
}
?>