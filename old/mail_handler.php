<?php 

  error_reporting( E_ALL );
        $from = "julianshaw2000@YOURDOMAIN";
       $to = "julianshaw2000@gmail.com";
        $subject = "PHP Mail Test script";
        $message = "This is a test to check the PHP Mail functionality";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        echo "Test email sent";

    
?>