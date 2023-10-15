

 <!-- form sign up -->
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
          <a class="nav-link" href="lg_page.php">Log in</a>
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
<form action="functions/sign_up.php" method="post">
<div class="mb-3 row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="username" name="username" required>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" id="password" name="password" required >
      <!-- <span id="password-strength">Weak</span> -->
    </div>
  </div>


  <div class="mb-3 row" style="margin-left: 10px;">
  <label for="role" class="col-sm-2 col-form-label">Role</label>
    <div class="col-sm-2">
    <select class="form-select" id="role" name="role" required>
        <option value="student">Student</option>
        <option value="analyst">Analyst</option>
        <option value="admin">Admin</option>
    </select>
    </div>
  </div></center><br><br>


  <div style="margin-left: 400px;">
  <button type="submit" name="register" class="btn btn-primary">Sign up</button>
    </div>

  </form>


 <!-- password strength indicator js -->
 <!-- <script>
        function checkPasswordStrength() {
            var password = document.getElementById("password").value;
            var strength = 0;

            // Check if password meets each criteria
            if (password.length >= 8) {
                strength++;
            }
            if (/[a-z]/.test(password)) {
                strength++;
            }
            if (/[A-Z]/.test(password)) {
                strength++;
            }
            if (/[0-9]/.test(password)) {
                strength++;
            }
            if (/[!@#$%^&*]/.test(password)) {
                strength++;
            }

    var strengthIndicator = document.getElementById("password-strength");

    if (strength < 7) {
        strengthIndicator.innerText = "Weak";
        strengthIndicator.style.color = "red";
        return false; // Prevent form submission for weak passwords
    } else {
        strengthIndicator.innerText = "Strong";
        strengthIndicator.style.color = "green";
        return true; // Allow form submission for strong passwords
    }
    }

</script> -->

</body>
</html>