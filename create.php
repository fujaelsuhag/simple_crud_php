<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

    <div class="card w-50 mx-auto my-5">
        <div class="card-header bg-info">
            <div class="card-title text-center">
                <h2>Hay dude! enter your info here....</h2>
            </div>
        </div>
        <div class="card-body">
            <nav class="navbar navbar-expand">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="text-uppercase me-3" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-uppercase me-3" href="create.php">Create</a>
                    </li>
                </ul>
            </nav>
            <form action="app/create.php" method="post" class="py-3">
                <input type="text" placeholder="Enter your name" name="name" class="form-control form-control-lg mb-3">
                <input type="text" placeholder="Enter your email" name="email" class="form-control form-control-lg mb-3">
                <input type="text" placeholder="Enter your phone" name="phone" class="form-control form-control-lg mb-3">
                <div class="text-center">
                    <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
