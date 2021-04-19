<?php
include ('connection.php');

if (isset($_POST['submit']) && $_POST['submit'] == 'Submit'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $sql = "INSERT INTO student_info (name,email,phone) values ('$name','$email','$phone')";

    $connect->query($sql);
    header('location:../index.php');
} else {
    header('location:../index.php');
}


?>