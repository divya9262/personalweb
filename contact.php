<?php 
if(isset($_POST['submit'])){
    $to = "divyakumari92622@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name. " " . $email . " wrote the following:" . "\n\n" . $_POST['Message'];
    $message2 = "Here is a copy of your message " . $namee . "\n\n" . $_POST['Message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>