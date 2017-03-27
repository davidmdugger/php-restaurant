<?php
    include('includes/header.php');
?>

    <div id="contact-form-content" class="container">
       <div class="row">
           <div class="col-md-8 col-md-offset-2">
               <h2>Contact Dugger's Deli</h2>
               <p>David Dugger speaking. Thanks for checking out my PHP Example Restaurant. This was a fun little project I came up with one weekend, and I enjoyed creating it.</p>
               
               <p>Below you will find an actual functioning contact form! <span>Except it goes to a fake email address!</span> Why? Because this is uploaded to Github and my portfolio. Really, I'd prefer not to get random messages about my fake restaurant...even though that means Dugger's Deli survey scores will suffer. You are more than welcome to submit the email to see how it functions though, just don't expect a response from Dugger's Deli (because it was just a random idea one weekend!).</p>
           </div>
        </div>
        
        <div class="row">
            <div id="invalid" class="col-xs-8 col-xs-offset-2">
                <?php
                    // CHECK FOR HEADER INJECTION
                    function has_header_injection($str){
                        return preg_match("/[\r\n]/", $str);
                    }

                    if(isset($_POST['contact_submit'])){

                        $name = trim($_POST['name']);
                        $email = trim($_POST['email']);
                        $msg = $_POST['message'];

                        // CHECK TO TO SEE IF $name OR $email HAVE HEADER INJECTION
                        if(has_header_injection($name) || has_header_injection($email)){
                            die();
                        }

                        if(!$name || !$email || !$msg){
                            echo "<h4>Name, Email, and a message are required.</h4><a href='contact.php'>Go back and enter your information</a>";
                            exit;
                        }

                        // ADD THE RECIPIENT EMAIL TO A VARIABLE

                        $to = "davidmdj86@gmail.com";

                        // CREATE A SUBJECT
                        $subject = "$name sent you a message via Dugger's Deli Contact form";

                        // CREATE A MESSAGE
                        $message = "Name: $name\r\n";
                        $message .= "Email: $email\r\n";
                        $message .= "Message:\r\n$msg";

                        // IF THE SUBSCRIBE CHECKBOX WAS CHECKED

                        if(isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe'){

                            // ADD A NEW LINE TO THE MESSAGE VARIABLE

                            $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
                        }

                        $message = wordwrap($message, 50);

                        // SET THE MAIL HEADERS INTO A VARIABLE

                        $headers = "MIME-Version 1.0\r\n";
                        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
                        $headers .= "From: $name <$email>\r\n";
                        $headers .= "X-Priority: 1\r\n";
                        $headers .= "X-MSMail-Priority: High\r\n";

                        // SEND THE EMAIL
                        mail($to, $subject, $message, $headers);

                ?>

                <!-- SHOW SUCCESS AFTER EMAIL HAS SENT -->
                <h4><strong>Thanks for contacting Dugger's Deli.</strong></h4>
                <p>Remember, this is a functioning contact form that is just sent to a dummy email.</p>

                <?php } else { ?>
            </div>
        </div>
        
        <div class="row">
           <div class="col-xs-12">
                <form method="post" action="" id="contact-form">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" placeholder="Jamie Doe">

                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" placeholder="name@example.com">

                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" placeholder="What would you like to say?"></textarea>
                    
                    <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
                    <label for="subscribe" id="subscribe-message">Subscribe to Newsletter</label>
                    
                    <input type="submit" name="contact_submit" value="Send Message">
                
                </form>
                
                <?php } ?>
            </div>
        </div>
    </div>


<?php
    include('includes/footer.php');
?>
