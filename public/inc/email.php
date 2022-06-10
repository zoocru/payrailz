<?php
    // For Contact form
    $to ='MGoldwasser@payrailz.com';
    $to2 ='JKern@payrailz.com';
    
	// session_start();
    
    if(isset($_POST['submit'])){
        $subject = "Payrailz newsletter form submission";

        $visitor_email = isset($_POST['email']) ? $_POST['email'] : ""; 
        $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

        // Prep the email
        $headers = "From: $to \r\n";
        $headers .= "Reply-To: $to \r\n";

        $body = "$visitor_email submitted the newsletter signup form:\n".
                "IP: $ip\n";

        //send the email
        mail($to, $subject, $body, $headers);
        mail($to2, $subject, $body, $headers);

        //session_start();
        $_SESSION['contact_form2'] = "Yes";
        
        header('Location: contact-thankyou2.php');
        
    }
?>