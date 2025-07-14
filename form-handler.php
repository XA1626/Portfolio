<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $subject = htmlspecialchars($_POST["subject"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "your_email@example.com";
  $headers = "From: $email";
  $body = "Message from $name:\n\n$message";

  mail($to, $subject, $body, $headers);
  echo "Message sent!";
}
?>
