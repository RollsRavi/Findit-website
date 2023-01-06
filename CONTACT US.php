<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
          <title>
              FIND IT 
          </title>
          <link rel="stylesheet" href="style.css">
          <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sigmar+One&display=swap" rel="stylesheet">
         </head>
    <body>
        <section class="contact">
            <nav>
                <a href="HOME.html"><img src="images/findit.PNG"></a>
                <div class="nav-links" id="navlinkss">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="HOME.html">HOME</a></li>
                        <li><a href="search.php"> SEARCH </a></li>
                        
                        <li><a href="CONTACT US.php">CONTACT US</a></li>
                        <LI><a href="ABOUTUS.html">ABOUT US</a></LI>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
                <h2>CONTACT US</h2>   
        </section>
        <section class="contact-us">
            
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="text">
                                <h3>Address</h3>
                                <p>HYDERABAD<BR>TELANGANA</p>
                            </div>
                        </div>
                
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                            <div class="text">
                                <h3>phone</h3>
                                <p>040-5678-234</p>
                            </div>
                        </div>
             
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="text">
                                <h3>Email</h3>
                                <p>findit@gmail.com</p>
                            </div>
                        </div>
                </div>
                    <div class="contactForm">
                        <form id="formcontact" method="post" action="">
                            <h1>FEEDBACK</h1>
                            <div class="inputBox">
                                <input type="text" name="name" required="required">
                                <span>Full Name</span>
                            </div>
                            <div class="inputBox">
                                <input type="email" name="email" required="required">
                                <span>Email</span>
                            </div>
                            <div class="inputBox">
                                <textarea name="message" required="required"></textarea>
                                <span>Type Your Message...</span>
                            </div>
                            <div class="inputBox">
                                <input type="submit" name="" value="SUBMIT">
                            </div>
                        </form>
                    </div>
            </div>
        </section>
        <section>
            <?php
                $name=$_POST['name'];
                $user_email=$_POST['email'];
                $message=$_POST['message'];

                $email_from="findit@gmail.com";
                $email_subject="New Feedback";
                $email_body="Username : $name.\n"."UserEmail : $user_email.\n"."Message : $message.\n";

                $to = "ravitejadasari007@gmail.com";
                $headers ="From : $email_from \r\n";
                $headers="Reply-to: $user_email \r\n";
                mail($to,$email_subject,$email_body,$headers);
            ?>

        </section>

        <section class="footer">
            <h4>FIND IT</h4>
            <P>BEST PLATFORM FOR THE PEOPLE TO KNOW ABOUT DIFFERENT PLACES OF ITS TOURIST SPOTS</P>
            <div class="icons">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
            </div>
            
        </section>


        <script>
            var navlinkss=document.getElementById("navlinkss");
            function showMenu(){
                navlinkss.style.right="0";
            }
            function hideMenu(){
                navlinkss.style.right="-200px";
            }
        </script>
    </body>
</html>