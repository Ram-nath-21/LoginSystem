<?php
include 'config.php';

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        .wrapper { width: 600px; padding: 20px; margin: 50px auto; background: white; border-radius: 5px; }
        h2 { text-align: center; }
        .profile-info { margin: 20px 0; }
        .profile-info p { margin: 10px 0; padding: 10px; background: #f9f9f9; border-radius: 4px; }
        .btn { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn:hover { background-color: #0056b3; }
        .btn-logout { background-color: #dc3545; }
        .btn-logout:hover { background-color: #c82333; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Welcome to Your Profile, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h2>
        
        <div class="profile-info">
            <p><strong>User ID:</strong> <?php echo $_SESSION["id"]; ?></p>
            <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION["email"]); ?></p>
        </div>
        
        <p>
            <a href="logout.php" class="btn btn-logout">Sign Out</a>
        </p>
    </div>
</body>
</html>