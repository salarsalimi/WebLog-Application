<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    <link rel="stylesheet" href="Statics/CSS/styles.css">
    <script src="/Statics/Javascript/functions.js"></script>
</head>
<body>

<?php
$is_logged = $_COOKIE['is_logged'];
$Username = $_COOKIE['username'];
if ( $is_logged == "true" and !is_null($Username) ){

?>
<div class="container">
    <h1>User Panel</h1>
    <div class="user-info">
        <label for="username">Username:</label>
        <span id="username">JohnDoe123</span>
    </div>
    <div class="user-info">
        <label for="email">Email:</label>
        <span id="email">johndoe@example.com</span>
    </div>
    <div class="button-container">
        <a href="#" class="button">Edit Profile</a>
        <a href="#" class="button">Change Password</a>
        <a href="#" class="button" onclick='deleteAllCookies();Redir_User("/login.php");'> Logout</a>
    </div>
</div>
<?php } 
else {
?>
    <p>Redirecting to the new Page...</p>
    <script>
        // Function to redirect after 3 seconds
        setTimeout(function() {
            window.location.href = '/login.php'; // Replace 'destination_page.html' with the URL of the destination page

            // Display message to redirect
            document.body.innerhtml = "<p> You are being redirected to the new page</p>"
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>

<?php } ?>
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 MyWebsite. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
