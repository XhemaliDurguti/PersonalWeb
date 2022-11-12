<?php
$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$personal_info = mysqli_fetch_assoc($result); 
?>