<?php
include 'db/config.php';
?>
<?php
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
  

    $tit = explode(" ", $personal_info['title']);


}   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name . ' ' . $surname ?>-<?= $title?> Site</title>
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header design -->
    <header>
        <a href="#" class="logo">Xh<span>e</span>ma</a>

        <ul class="navlist">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact Me</a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>