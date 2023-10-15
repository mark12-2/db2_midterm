<?php
$password = "password"; // Replace this with the password to validate

function is_valid_password($password) {
    // Define your password rules using regular expressions
    $uppercase_required = preg_match('/[A-Z]/', $password);
    $lowercase_required = preg_match('/[a-z]/', $password);
    $number_required = preg_match('/[0-9]/', $password);
    $special_character_required = preg_match('/[!@#$%^&*]/', $password);

    // Set your desired password length
    $min_length = 8;

    // Check if the password meets all the defined rules
    if (strlen($password) < $min_length) {
        return false;
    }

    if (!$uppercase_required || !$lowercase_required || !$number_required || !$special_character_required) {
        return false;
    }

    return true;
}

if (is_valid_password($password)) {
    echo "Password is valid!";
} else {
    echo "Password is not valid.";
}
?>
