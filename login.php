<?php
session_start();  // Start session for login tracking

// If already logged in, redirect to homepage
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Hardcoded user credentials (password hashed for security:contentReference[oaicite:20]{index=20})
$users = [
    'student' => password_hash('pass123', PASSWORD_DEFAULT)  // username: student, password: pass123
];

$error = '';
// Process login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    // Check credentials
    if (isset($users[$username]) && password_verify($password, $users[$username])) {
        // Login successful
        $_SESSION['username'] = $username;  // Set session variable
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="login-form">
        <h2>Login</h2>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post" action="login.php">
            <label>
                Username:<br>
                <input type="text" name="username" required>
            </label><br>
            <label>
                Password:<br>
                <input type="password" name="password" required>
            </label><br>
            <button type="submit">Login</button>
        </form>
        <p><a href="index.php">Back to Home</a></p>
    </section>
</body>
</html>
