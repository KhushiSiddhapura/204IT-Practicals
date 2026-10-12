<?php
$field = $_GET['field'] ?? '';
$value = $_GET['value'] ?? '';
$password = $_GET['password'] ?? '';

if ($field == "username") {
    $users = array("admin", "khushi", "student","khushi123","khushi111","khushi009","khushi999");

    if ($value == "")
        echo "Username is required.";
    elseif (is_numeric($value))
        echo "Username cannot be numeric only.";
    elseif (in_array(strtolower($value), $users))
        echo "Username already taken.";
    else
        echo "Username available.";
} elseif ($field == "password") {
    if (strlen($value) < 8)
        echo "Password must be at least 8 characters.";
    else
        echo "Valid password.";
} elseif ($field == "confirm") {
    if ($value == $password && $value != "")
        echo "Passwords match.";
    else
        echo "Passwords do not match.";
} elseif ($field == "email") {
    if (filter_var($value, FILTER_VALIDATE_EMAIL))
        echo "Valid email.";
    else
        echo "Invalid email.";
} elseif ($field == "mobile") {
    if (preg_match('/^[6-9][0-9]{9}$/', $value))
        echo "Valid mobile number.";
    else
        echo "Invalid mobile number.";
}
?>
