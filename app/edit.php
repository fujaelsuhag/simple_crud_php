<?php

include ('connection.php');

if (isset($_GET['edit']) && $_GET['edit'] != '') {
    $id = $_GET['edit'];

    $sql = "SELECT * from student_info WHERE id = '$id'";
    $data = $connect->query($sql);
    $show_info = $data->fetch_assoc();

} elseif (isset($_POST['submit']) && $_POST['submit'] == 'Update') {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE student_info SET name='$name', email='$email', phone='$phone' WHERE id = '$user_id'";
    $connect->query($sql);

    header('location:../index.php');

} else {
    header('location:../index.php');
}

?>
