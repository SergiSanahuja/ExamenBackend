<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recovery Password</title>
</head>
<body>
    <form action="../controller/change-password.php" method="post">
    <h1>Change Password</h1>

        <label for="email">email</label>
        <input type="email" id="email" name="email" title="Email" />

        <label for="newPassword">Old Password:</label>
        <input type="password" id="oldPassword" name="oldPassword" title="Old password" />

        <label for="confirmPassword">New Password:</label>
        <input type="password" id="newPassword" name="newPassword" title="Confirm new password" />

        <p class="form-actions">
        <input type="submit" value="Change Password" title="Change password" />
        </p>


    </form>
    
</body>
</html>