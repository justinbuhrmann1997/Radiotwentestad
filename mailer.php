<?php
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_GET["naam"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_GET["email"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_GET["telefoon"]);
        $message = trim($_GET["bericht"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }


        $recipient = "radiotwentestad@gmail.com";

        $subject = "Nieuw bericht van $name";

        $email_content = "Naam: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Telefoonnummer: $phone\n\n";
        $email_content .= "Bericht:\n$message\n";

        $email_headers = "From: $name <$email>";

        // Email versturen.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Alles ging goed
            http_response_code(200);
            echo '<div id="alertBox" class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p id="alert-text">Uw bericht is succesvol verstuurd!</p>
                  </div>';
        } else {
            // Het versturen van de mail ging fout (internal server error)
            http_response_code(500);
            echo '<div id="alertBox" class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p id="alert-text">Oeps! Er is iets fout gegaan bij het verzenden. Probeer het later opnieuw</p>
                  </div>';
        }

    } else {
        // Geen GET request
        http_response_code(403);
        echo '<div id="alertBox" class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p id="alert-text">Oeps! Er is iets fout gegaan bij het verzenden. Probeer het later opnieuw</p>
                  </div>';
    }

?>