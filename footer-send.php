<?php 
if(isset($_POST['submit'])){
    $to = "support@manpowerqa.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['email'];
    $subject = $_POST['email'];

    $message = "This Mail ID:"."\t\t\t".$name."\n\n"."please contact me:"."\t\t\t".$from."\n\n"."subject"."\t\t\t".$subject."\n\n"."message"."\t\t\t".$_POST['message'];

    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo '<script type="text/javascript"> 
    alert("Thanks we will get in touch with you soon."); 
    window.location.href = "http://manpowerqa.com/";
    </script>';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>