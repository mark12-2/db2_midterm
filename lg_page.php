<?php

session_start(); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Midtermmm</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>
  
<!-- navbar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Midterm</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="lg_page.php">Home</a> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sg_page.php">Sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav> <br><br><br><br><br><br>

  <!-- form -->
<center>
  <form action="functions/login.php" method="post">
<div class="mb-3 row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="username" name="username">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" id="password" name="password">
    </div>
  </div><br><br></center>

  <div style="margin-left: 400px;">
  <button type="submit" name="loginnn" class="btn btn-primary">Log in</button><br><br>

  <a class="nav-link active" aria-current="page" href="sg_page.php"><i>Not yet signed up?</i></a>
  </div>
  
  </form>



</body>
</html>

