<?php
$link = mysqli_connect("localhost", "root", "", "my_shooz");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());

}
?>