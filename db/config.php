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

// Innsert contact Form in database
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact`(`name`, `email`, `phone`, `message`) VALUES('$name','$email','$phone','$message')";
    if ($result = mysqli_query($con, $sql)) {
?>
        <script type="text/javascript">
            alert('Contacted Succesfully');
            window.location = "../index.php"
        </script>
<?php
    } else {
        echo 'error';
    }
}
?>