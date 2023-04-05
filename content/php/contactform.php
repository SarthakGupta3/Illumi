<?php
   $to = "support@illumidreams.com"; // <– replace with your address here
   $subject = $_POST['subject'];
   $from = $_POST['email'];
   $message= $_POST['body'];
   $headers = "From:" . $from;
   mail($to,$subject,$message,$headers);
   echo "Mail Sent.";
?>