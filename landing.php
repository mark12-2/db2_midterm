
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Midterm</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
        <!-- Logout button -->
            <form action="functions/logout.php" method="post">
                <button type="submit" class="btn btn-primary" style="margin-left:1200px;">Logout</button>
            </form>
      </ul>
    </div>
  </div>
</nav> <br><br><br>

 <!-- content here -->
<!-- php function indicator for user  -->
<center>
<?php

session_start(); // Start session

if (isset($_SESSION['role'])) {
    $role = $_SESSION['role'];

    if ($role === 'student') {
        // Content for students
        echo "Welcome, Student!";
        // Display student-specific content here
    } elseif ($role === 'admin') {
        // Content for admins
        echo "Welcome, Admin!";
        // Display admin-specific content here
    } elseif ($role === 'analyst') {
        // Content for analysts
        echo "Welcome, Analyst!";
        // Display analyst-specific content here
    } else {
        // Handle unknown or unexpected roles
        echo "Unknown user role.";
    }
} else {
    // Redirect the user to the login page if not logged in
    header("Location: lg_page.php"); // Replace with the actual login page
    exit();
}


?>
</center>

</body>
</html>