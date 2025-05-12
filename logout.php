<?php
session_start();            // Resume session
session_unset();            // Remove all session variables
session_destroy();          // Destroy the session data (ログアウト):contentReference[oaicite:22]{index=22}
// Redirect to login page
header("Location: login.php");
exit();
?>
