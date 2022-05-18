<?php require_once "includes/db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coffee And Tea</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a style="color: red; font-size: 24px; margin-right: 30px;" class="navbar-brand" href="#">Coffee and Tea</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">about us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <span class="glyphicon glyphicon-search"></span>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search <i class="fa fa-search"></i></button>
        </form>
        <div class="col-sm-0">
          <a style="margin-left: 10px" class="btn btn-secondary" href="login.php">Login <i class="fa fa-user"></i></a>
        </div>
      </div>
    </nav>
    <div class="text-center">
      <img style="height: auto;" class="img-fluid d-block mx-auto" width="100%" src="images/img.jpg" alt="">
    </div>
  </header>
  <div class="jumbotron">
    <h1 class="heading d-flex justify-content-center">This is my first page</h1>
    <blockquote class="d-flex justify-content-center blockquote">
      <p class="mb-0 lead ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>
  </div>
  <div class="container">
    <?php
    $sql_sel = "SELECT * FROM users";
    $run_sel = mysqli_query($conn, $sql_sel);
    while ($rows = mysqli_fetch_assoc($run_sel)) {
    }
    ?>
    <form method="post" action="index.php">
      <?php
      if (isset($_POST['submit_user'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $insert = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
        $run_insert = mysqli_query($conn, $insert);
      }
      ?>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary" name="submit_user">Submit</button>
    </form>
  </div>
  <?php include 'includes/footer.php'; ?>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery.js"></script>
</body>

</html>
