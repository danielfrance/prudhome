<?php

if(isset($_POST['email'])) {

    $name = $_POST['name']; // required

    $email_from = $_POST['email']; // required

    $telephone = $_POST['phone']; // not required

    $comments = $_POST['message']; // required

    $which = $_POST['form-type']; // required

    // EDIT THE 2 LINES BELOW AS REQUIRED

//    $email_to = "synhero@gmail.com";
    $email_to = "Dustinprudhom@att.net";

    $email_subject = "Website Contact - Type: " . $which;


    function died($error) {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }


    $email_message = "Form details below.\n\n";



    function clean_string($string) {

        $bad = array("content-type","bcc:","to:","cc:","href");

        return str_replace($bad,"",$string);

    }



    $email_message .= "First Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Telephone: ".clean_string($telephone)."\n";

    $email_message .= "Comments: ".clean_string($comments)."\n";



// create email headers

    $headers = 'From: '.$email_from."\r\n".

        'Reply-To: '.$email_from."\r\n" .

        'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);

    ?>



    <!-- include your own success html here -->


    <html>
    <head></head>
    <body style="background-color: #a3bdc3;">
        <p style="color: #fe0000; text-align: center; padding-top: 50px; font-size: 30px; font-family: Arial;">
            Thank you for contacting us. We will be in touch with you very soon.
        </p>

        <p style="text-align: center;"><a href="/" style="color: white; font-size: 25px;">Return to Home</a></p>
    </body>
    </html>



    <?php

}

?>