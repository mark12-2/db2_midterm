<?php

include "db_con.php";

// Registration form handling
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Validate the password for strength
    if (!preg_match("/^(?=.*[A-Z])(?=.*[0-9]).{8,}$/", $password)) {
        echo '<script type="text/javascript">alert("Password does not meet the strength criteria: At least 8 characters, at least one uppercase letter, and at least one number required.");
        window.location.href = "../lg_page.php";
        </script>';
        
    } else {
        // Check if the username already exists in the database
        $check_query = "SELECT username FROM users WHERE username = ?";
        $check_stmt = $conn->prepare($check_query);
        $check_stmt->bind_param("s", $username);
        $check_stmt->execute();
        $check_stmt->store_result();

        if ($check_stmt->num_rows > 0) {
            echo '<script type="text/javascript">alert("Username already in use. Please choose a different username.");
            window.location.href = "../lg_page.php";
            </script>';

        } else {
            // Username is available, proceed with registration
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert the user into the database
            $insert_query = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
            $insert_stmt = $conn->prepare($insert_query);
            $insert_stmt->bind_param("sss", $username, $hashed_password, $role);

            if ($insert_stmt->execute()) {
                echo '<script type="text/javascript"> alert("Registration successful! ");</script>';
                header("Location: ../lg_page.php");
            } else {
                echo "Registration failed: " . $conn->error;
            }
        }

        $check_stmt->close();
        $insert_stmt->close();
    }
}

// Close the database connection
$conn->close();
?>
