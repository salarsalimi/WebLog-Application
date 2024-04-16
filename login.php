
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>



<?php
// Check if form is submitted ?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set and not empty
    if (isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
        // Retrieve username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate username and password (dummy validation for demonstration)
        if ($username === "Salar" && $password === "P@ssw0rd1") {
            // Setting cookies for the user
            setcookie("is_logged", "true", time() + (7 * 24 * 60 * 60), "/");
            setcookie("username", $username, time() + (7 * 24 * 60 * 60), "/");

            // Successful login, redirect to dashboard or homepage
            header("Location: user_panel.php");
            exit;
        } else {
            // If Invalid username or password, display error message
            $error_message = "Invalid username or password.";
        }
    } else {
        // Username or password fields are empty, display error message
        $error_message = "Please enter both username and password.";
    }

    echo "<p>UserName or Password is incorrect</p>";
}
?>
<div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="button">Login</button>
    </form>
</div>
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 MyWebsite. All rights reserved.</p>
    </div>
</footer>
</body>

</html>

