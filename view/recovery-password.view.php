<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recovery Password</title>
</head>
<body>
    <form action="../controller/recovery-password.php" method="post">
    <h1>Change Password</h1>

        <label for="email">email</label>
        <input type="email" id="email" name="email" title="Email" />

        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="newPassword" title="New password" />

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" title="Confirm new password" />

        <p class="form-actions">
        <input type="submit" value="Change Password" title="Change password" />
        </p>


    </form>
    
</body>
</html>