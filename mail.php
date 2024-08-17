<?php
    
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["Name"]));
        $lastName = strip_tags(trim($_POST["Last-Name"]));
        $subject = strip_tags(trim($_POST["Email"]));
        $number = strip_tags(trim($_POST["Number"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["Email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["Message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! Message Not Send.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "hannah.ross51@gmail.com";

        // Set the email subject.
        $subject = "New Message from $name";

        // Build the email content.
        $email_content = "Name: $name $lastName\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Subject: $subject\n\n";
        $email_content .= "Number: $number\n\n";
        $email_content .= "Message:\n$message\n";


        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            ?> <script>  document.getElementById('success')classList.remove('d-none');</script> <?php
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            ?> <script>  document.getElementById('fail').classList.remove('d-none');</script> <?php
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        ?> <script>  document.getElementById('fail').classList.remove('d-none');</script> <?php
    }
?>
