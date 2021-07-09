<?php
 
if(isset($_POST['contact_email'])) {     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED 
    $email_to = "aabel011@gmail.com";
 
    function died($error) { 
        // your error code can go here 
        echo '<div style="color: red; font-size: 2rem; font-weight: bold; margin-bottom: 1rem;">Error during form submission:</div>'; 
        echo $error."<br /><br />"; 
        die(); 
    }
    // validation expected data exists 
    if(!isset($_POST['name']) ||
         !isset($_POST['contact_email']) ||
         !isset($_POST['subject']) ||
         !isset($_POST['message'])) {
 
        died('Please fill all fields.\n');       
 
    }
 
     
 
    $name = $_POST['name']; //required
    $contact_email = $_POST['contact_email']; // required 
    $subject = $_POST['subject']; // required 
    $message = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$contact_email)) { 
    $error_message .= 'That doesn\'t look like a valid email address.<br />'; 
  } 
    $string_exp = "/^[A-Za-z0-9 :$#@%&.'-]+$/"; 
  if(!preg_match($string_exp,$name)) { 
    $error_message .= 'Your name didn\'t pass my regex test. It must be a very strange name. <br />'; 
  }
  
  if(strlen($message) < 2) {
 
    $error_message .= 'Your message needs to be longer.<br />';
 
  }
 
  if(strlen($error_message) > 0) { 
    $error_message .= '<br /><br /><br /><a href="javascript:history.back()">Click here to go back to the contact form.</a>';
    died($error_message);
 
  }
 
    $email_message = "PERSONAL SITE CONTACT FORM: Form details below.\n\n\n";

 
    function clean_string($string) { 
      $bad = array("content-type","bcc:","to:","cc:","href"); 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($contact_email)."\n";
 
    $email_message .= "<b>Message body:</b>\n\n ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$contact_email;
 
mail($email_to, $subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Your message has been sent. Redirecting...
 
<script>
  setTimeout(function () {
    window.location.href= 'https://www.antonioabella.me/contact.html';
  }, 3000);
</script>
 
 
<?php
 
}
 
?>
