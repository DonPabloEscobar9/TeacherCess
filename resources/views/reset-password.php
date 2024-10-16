<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $newPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt = $conn->prepare("UPDATE users SET password=? WHERE email=(SELECT email FROM password_resets WHERE token=?)");
    $stmt->bind_param("ss", $newPassword, $token);

    if ($stmt->execute()) {
        echo "Password has been reset.";
    } else {
        echo "Error: " . $stmt->error;
    }
    }

?>
<form action="reset-password.php" method="POST">
    <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
    <input type="password" name="password" placeholder="Enter new password" required>
    <button type="submit">Reset Password</button>
</form>
