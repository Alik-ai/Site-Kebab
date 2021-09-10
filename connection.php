<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){               // ! = si ca ne se connecte pas, alors affiche ceci :
die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'siteKebab');
if (!$select_db){
die("Database Selection Failed" . mysqli_error($connection));
}
?>