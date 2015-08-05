<?php include 'header.php';?>
<div class="container">

    <div class="row">
        <div class="spacer">

        <?php
        if(isset($_POST['email'])) {
            $email_to = " paradiseinnmanagement@gmail.com";
            $email_subject = "reservation from paradise";
            function died($error) {
                echo "We are very sorry, but there were error(s) found with the form you submitted. ";
                echo "These errors appear below.<br /><br />";
                echo $error."<br /><br />";
                echo "Please go back and fix these errors.<br /><br />";
                die();
            }
            // validation expected data exists
            if(!isset($_POST['name']) ||
                !isset($_POST['email'])) {
                died('We are sorry, but there appears to be a problem with the form you submitted.');
            }
            $name = $_POST['name']; // required
            $email = $_POST['email']; // required
            $dates = $_POST['dates']; // required
            $rooms = $_POST['rooms'];
            $adults = $_POST['adults'];
            $nights = $_POST['nights'];
            $msg = $_POST['msg'];

            $error_message = "";
            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

            if(!preg_match($email_exp,$email)) {
                $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
            }

            $string_exp = "/^[א-תת-אA-Za-z .'-]+$/";

            if(!preg_match($string_exp,$name)) {
                $error_message .= 'The name you entered does not appear to be valid.<br />';
            }
            if(strlen($error_message) > 0) {
                died($error_message);
            }
            $email_message = "Form details below.\n\n";

            function clean_string($string) {
                $bad = array("content-type","bcc:","to:","cc:","href");
                return str_replace($bad,"",$string);
            }

            $email_message .= "Name: ".clean_string($name)."\n";
            $email_message .= "Email: ".clean_string($email)."\n";
            $email_message .= "Rooms: ".clean_string($rooms)."\n";
            $email_message .= "Adults: ".clean_string($adults)."\n";
            $email_message .= "Dates: ".clean_string($dates)."\n";
            $email_message .= "Nights: ".clean_string($nights)."\n";
            $email_message .= "Message: ".clean_string($msg)."\n";


            // create email headers
            $headers = 'From: '.$email."\r\n".
            'Reply-To: '.$email."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            @mail($email_to, $email_subject, $email_message, $headers);

            $confirmation_subject = "Reservation request submitted";
            $confirmation_message = "Thank you for reserving your room at the Paradise Inn.\nYour reservation for ";
            $confirmation_message = $confirmation_message.$nights." night(s) on ";
            $confirmation_message = $confirmation_message.$dates." has been recorded.\n";
            $confirmation_message = $confirmation_message."We will contact you shortly to finalize the reservation.\n";
            $confirmation_headers = 'From: '.$email_to."\r\n".
            'Reply-To: '.$email_to."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            @mail($email, $confirmation_subject, $confirmation_message, $confirmation_headers);

            ?>
            <!-- include your own success html here -->
            <h4>Recorded reservation for <?php echo $name; ?>: <?php echo $nights;?> night(s) on <?php echo $dates; ?>.</h4><br>
            <span style="line-height: 20px;">Thank you for your reservation!<br>
            You should receive a confirmation email soon.<br>
            We will be in touch with you to finalize the details of your reservation.
                </span>
        <?php
        }

        ?>
        </div>
    </div>
</div>
<?php include 'footer.php';?>