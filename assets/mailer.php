<?php

session_start();

require "../classes/Url.php";

header('Content-Type: text/html; charset=utf-8');

// Loading field from form - name, email a message; deleting white chars; deleting HTML
$name = strip_tags(trim($_POST["name"]));
$name = str_replace(array("\r", "\n"), array(" ", " "), $name);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = trim($_POST["message"]);

// Checking data or redirect to error addres
if (empty($name) or empty($message) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["success"] = "Jejda, něco se pokazilo.";
    Url::redirectUrl("/#con");
    exit;
}

// Set your email
$recipient = "spravce@vlksamotar.cz";

// Set subject of post email
$subject = "Máte nový kontakt od: $name";

// Content of post email
$email_content = "Jméno: $name\n";
$email_content .= "Email: $email\n\n";
$email_content .= "Zpráva:\n$message\n";

// Email header
$email_headers = "MIME-Version: 1.0\r\n" . "From: =?utf-8?b?" . base64_encode($name) . "?= <" . $email . ">\r\n" . "Content-Type: text/plain; charset=utf-8\r\n";

// Send email
mail($recipient, $subject, $email_content, $email_headers);

// Redirect to some address, if everything is all right
$_SESSION["success"] = "Odeslání proběhlo úspěšně.";
Url::redirectUrl("/#con");

?>