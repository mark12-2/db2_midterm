<?php

session_start();
include "db_con.php";


// Login form handling
if (isset($_POST['loginnn'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // Plain text password

    // Retrieve the hashed password and role from the database
    $sql = "SELECT password, role FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password, $role); // Fetch the role as well
    $stmt->fetch();
    $stmt->close();

    // Verify the password
    if (password_verify($password, $hashed_password)) {
        echo '<script type="text/javascript">alert("Login successful!");
        window.location.href = "../landing.php";</script>';
        // After successful login, set the user's role in a session variable
        $_SESSION['role'] = $role; // Set the user's role

    } else {
        echo '<script type="text/javascript">alert("Login failed. Invalid username or password.");
        window.location.href = "../lg_page.php";
        </script>';
    }
}

// Close the database connection
$conn->close();

?>
