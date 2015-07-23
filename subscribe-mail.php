<?php include 'header.php';?>
<div class="container">

    <div class="row">
        <div class="spacer">

        <?php

if(isset($_POST['email'])) {


    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "guy.yitzhaki@gmail.com";

    $email_subject = "subscribe me";





    function died($error) {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "<a href='javascript:window.history.back();'>back</a>";

        die();

    }



    // validation expected data exists
    if(!isset($_POST['email'])) {
        died('Please enter email.');
    }
    if($_POST['email'] == '') {
        died('Please enter email.');
    }



$email_from = $_POST['email']; // required



$error_message = "";

$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if(!preg_match($email_exp,$email_from)) {

$error_message .= 'The Email Address you entered does not appear to be valid.<br />';

}







$email_message = "Form details below.\n\n";



function clean_string($string) {

$bad = array("content-type","bcc:","to:","cc:","href");

return str_replace($bad,"",$string);

}





$email_message .= "Email: ".clean_string($email_from)."\n";





// create email headers

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

//@mail($email_to, $email_subject, $email_message, $headers);

?>



<!-- include your own success html here -->



Thank you for contacting us. We will be in touch with you very soon.



<?php

}

?>
        </div>
    </div>
</div>
<?php include 'footer.php';?>