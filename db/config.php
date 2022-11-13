<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "portfolio";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

    die("Database error");
}
    //select users data from database mysql

    $sql = "SELECT * FROM users WHERE id = 1";
    $res = mysqli_query($con, $sql);

    while ($personal_info = mysqli_fetch_array($res)) {
        // $id = $persona_info['id'];
        $name = $personal_info['name'];
        $surname = $personal_info['surname'];
        $email = $personal_info['email'];
        $phone = $personal_info['phone'];
        $title = $personal_info['title'];
        $desc = $personal_info['description'];
        $slogan = $personal_info['slogan'];
        $facebook = $personal_info['facebook'];
        $twiter = $personal_info['twiter'];
        $insta = $personal_info['insta'];
        $youtube = $personal_info['youtube'];
        $image = $personal_info['image'];

        $tit = explode(" ", $personal_info['title']);
    }

    // fetch data for services from database 

    $sql1 = "SELECT * FROM services LIMIT 3";
    $res1 = mysqli_query($con,$sql1);
    while($services_info = mysqli_fetch_array($res1)){
        $icon = $services_info['icon'];
        $title = $services_info['title'];
        $desc = $services_info['description'];
        
    }
    
?>