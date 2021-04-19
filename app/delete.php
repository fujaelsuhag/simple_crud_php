<?php

include ('connection.php');

if (isset($_GET['delete']) && $_GET['delete'] != '') {
    $data_id = $_GET['delete'];
    $connect->query("DELETE FROM student_info where id = '$data_id'");

    header('location:../index.php');
} else {
    header('location:../index.php');
}

?>
