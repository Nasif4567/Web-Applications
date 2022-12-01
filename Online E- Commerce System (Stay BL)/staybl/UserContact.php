<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Us</title>
        <link rel="stylesheet" href="UserContactStyle.css" type="text/css">
        
    </head>
    <body>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <p>Need Something? StayBlizz is here to help!</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+60 11-5840 3488</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>stayblizzz@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form action ="ContactProcess.php" method="POST">
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="name" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="Email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea name="mesg" required="required"></textarea>
                            <span>Type your message...</span>
                        </div>
                        <div class="inputBox">
                            <input name="btncont" type="submit" name="" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
