<?php

include "config.php";
$id = $_POST['id'];
$list = $_POST['list'];

mysqli_query($con,"UPDATE `table_todo` SET `Act_List`='$list' WHERE `table_todo` . `id` = '$id' ");
header("location: index.php");

?>
