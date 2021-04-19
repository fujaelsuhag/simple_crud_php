<?php
    include ('app/connection.php');
    $show_data = $connect->query("SELECT * from student_info");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<div class="card w-50 mx-auto my-5">
    <div class="card-header bg-info">
        <div class="card-title text-center">
            <h2>This is simple CRUD project</h2>
        </div>
    </div>
    <div class="card-body">
        <nav class="navbar navbar-expand mb-3">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="text-uppercase me-3" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="text-uppercase me-3" href="create.php">Create</a>
                </li>
            </ul>
        </nav>
        <table class="table table-bordered table-hover table-success table-striped" style="font-size: 18px">
            <tr class="text-center bg-light">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            <?php while ($data = $show_data->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['phone']; ?></td>
                <td class="text-center">
                    <a href="edit.php?edit=<?php echo $data['id'];?>" class="btn btn-success">
                        <i class="fas fa-edit"></i>
                        Edit
                    </a>
                    <a href="app/delete.php?delete=<?php echo $data['id']; ?>" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                        Delete
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
