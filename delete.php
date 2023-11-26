<?php

include "config.php";
$id = $_GET['id'];
mysqli_query($con, "DELETE FROM `table_todo` WHERE `id` ='$id'");

header("location:index.php");

?>