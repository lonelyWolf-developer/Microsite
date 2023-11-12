<?php

    session_start();

    require "../classes/Database.php";
    require "../classes/Order.php";
    require "../classes/Url.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $candy = $_POST["candy"];
        $roulade = $_POST["roulade"];
        $cake = $_POST["cake"];

        $database = new Database();
        $connection = $database->connectionDB();

        $id = Order::createOrder($connection, $name, $surname, $phone, $email, $candy, $roulade, $cake);

        if ($id != null) {           

            // Set your email
            $recipient = "spravce@vlksamotar.cz";

            // Set subject of post email
            $subject = "Máte nový kontakt od: $name";

            // Content of post email
            $email_content = "Jméno: $name\n";
            $email_content .= "Příjmení: $surname\n";
            $email_content .= "Telefon: $phone\n";
            $email_content .= "Email: $email\n\n";
            $email_content .= "Objednávka:\nCukroví - $candy\nRoláda - $roulade\nDort - $cake\n\n";

            // Email header
            $email_headers = "MIME-Version: 1.0\r\n" . "From: =?utf-8?b?" . base64_encode($name) . "?= <" . $email . ">\r\n" . "Content-Type: text/plain; charset=utf-8\r\n";

            // Send email
            mail($recipient, $subject, $email_content, $email_headers);

            // Redirect to some address, if everything is all right
            $_SESSION["success"] = "Objednávka byla vytvořena.";
            Url::redirectUrl("/#ord");
        } else {
            echo "Objednávka nebyla vytvořena.";
        }

    }


?>