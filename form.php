<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="process_login.php" method="POST">
        <label >Username:</label>
        <input type="text" id="username" name="username" required>
        <label >Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
-------PHP CODE---------
<?php
$username = $_POST["username"];
$email = $_POST["email"];

echo "Username: " . $username . "<br>";  // Concatenate with dot
echo "Email: " . $email;                  // Concatenate with dot

?>