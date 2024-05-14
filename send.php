<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// add you social medial link
$facebook = "#";
$instragram = "#";
$linkedin = "#";
$youtube = "#";

$first_name = $_POST["first_name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You <?php echo $first_name ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
</head>
<body class='contact_us_form_body'>

    <?php 

            // check user clicked submit button
        if(isset($_POST["submit"])){
            $mail = new PHPMailer(true);
            $first_name= $_POST["first_name"];
            $last_name=$_POST['last_name'];
            $email = $_POST['email'];
            $subject=$_POST['subject'];
            $message = $_POST['message'];

            $dt = date('Y-m-d, H:i a');

            $htmlContent = '<!doctype html>
            <html lang="en">
              <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <title>Simple Transactional Email</title>
                <style media="all" type="text/css">
                /* -------------------------------------
                GLOBAL RESETS
            ------------------------------------- */
                
                body {
                  font-family: "Montserrat", sans-serif;
                  -webkit-font-smoothing: antialiased;
                  font-size: 16px;
                  line-height: 1.3;
                  -ms-text-size-adjust: 100%;
                  -webkit-text-size-adjust: 100%;
                }
                
                table {
                  border-collapse: separate;
                  mso-table-lspace: 0pt;
                  mso-table-rspace: 0pt;
                  width: 100%;
                }
                
                table td {
                  font-family: "Montserrat", sans-serif;
                  font-size: 16px;
                  vertical-align: top;
                }
                /* -------------------------------------
                BODY & CONTAINER
            ------------------------------------- */
                
                body {
                  background-color: #f4f5f6;
                  margin: 0;
                  padding: 0;
                }
                
                .body {
                  background-color: #f4f5f6;
                  width: 100%;
                }
                
                .container {
                  margin: 0 auto !important;
                  max-width: 600px;
                  padding: 0;
                  padding-top: 24px;
                  padding-bottom: 24px;
                  width: 600px;
                }
                
                .content {
                  box-sizing: border-box;
                  display: block;
                  margin: 0 auto;
                  max-width: 600px;
                  padding: 0;
                }
                /* -------------------------------------
                HEADER, FOOTER, MAIN
            ------------------------------------- */
                
                .main {
                  background: #ffffff;
                  border: 1px solid #eaebed;
                  border-radius: 16px;
                  width: 100%;
                }
                
                .wrapper {
                  box-sizing: border-box;
                  padding: 24px;
                }
                
                .footer {
                  clear: both;
                  padding-top: 24px;
                  text-align: center;
                  width: 100%;
                }
                
                .footer td,
                .footer p,
                .footer span,
                .footer a {
                  color: #9a9ea6;
                  font-size: 16px;
                  text-align: center;
                }
                /* -------------------------------------
                TYPOGRAPHY
            ------------------------------------- */
                
                p {
                  font-family: "Montserrat", sans-serif;
                  font-size: 16px;
                  font-weight: normal;
                  margin: 0;
                  margin-bottom: 16px;
                }
                
                a {
                  color: #0867ec;
                  text-decoration: underline;
                }
                
                @media all {
                  .btn-primary table td:hover {
                    background-color: #ec0867 !important;
                  }
                  .btn-primary a:hover {
                    background-color: #ec0867 !important;
                    border-color: #ec0867 !important;
                  }
                }
                
                /* -------------------------------------
                OTHER STYLES THAT MIGHT BE USEFUL
            ------------------------------------- */
                
                .last {
                  margin-bottom: 0;
                }
                
                .first {
                  margin-top: 0;
                }
                
                .align-center {
                  text-align: center;
                }
                
                .align-right {
                  text-align: right;
                }
                
                .align-left {
                  text-align: left;
                }
                
                .text-link {
                  color: #0867ec !important;
                  text-decoration: underline !important;
                }
                
                .clear {
                  clear: both;
                }
                
                .mt0 {
                  margin-top: 0;
                }
                
                .mb0 {
                  margin-bottom: 0;
                }
                
                .preheader {
                  color: transparent;
                  display: none;
                  height: 0;
                  max-height: 0;
                  max-width: 0;
                  opacity: 0;
                  overflow: hidden;
                  mso-hide: all;
                  visibility: hidden;
                  width: 0;
                }
                .info_heading{
                    font-size:14px;
                    font-weight:600;
                }
                
              
                
                /* -------------------------------------
                RESPONSIVE AND MOBILE FRIENDLY STYLES
            ------------------------------------- */
                
                @media only screen and (max-width: 640px) {
                  .main p,
                  .main td,
                  .main span {
                    font-size: 16px !important;
                  }
                  .wrapper {
                    padding: 8px !important;
                  }
                  .content {
                    padding: 0 !important;
                  }
                  .container {
                    padding: 0 !important;
                    padding-top: 8px !important;
                    width: 100% !important;
                  }
                  .main {
                    border-left-width: 0 !important;
                    border-radius: 0 !important;
                    border-right-width: 0 !important;
                  }
                  .btn table {
                    max-width: 100% !important;
                    width: 100% !important;
                  }
                  .btn a {
                    font-size: 16px !important;
                    max-width: 100% !important;
                    width: 100% !important;
                  }
                }
                /* -------------------------------------
                PRESERVE THESE STYLES IN THE HEAD
            ------------------------------------- */
                
                @media all {
                  .ExternalClass {
                    width: 100%;
                  }
                  .ExternalClass,
                  .ExternalClass p,
                  .ExternalClass span,
                  .ExternalClass font,
                  .ExternalClass td,
                  .ExternalClass div {
                    line-height: 100%;
                  }
                  .apple-link a {
                    color: inherit !important;
                    font-family: inherit !important;
                    font-size: inherit !important;
                    font-weight: inherit !important;
                    line-height: inherit !important;
                    text-decoration: none !important;
                  }
                  #MessageViewBody a {
                    color: inherit;
                    text-decoration: none;
                    font-size: inherit;
                    font-family: inherit;
                    font-weight: inherit;
                    line-height: inherit;
                  }
                }
                </style>
              </head>
              <body>
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
                  <tr>
                    <td>&nbsp;</td>
                    <td class="container">
                      <div class="content">
            
                        <!-- START CENTERED WHITE CONTAINER -->
                        <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="main">
            
                          <!-- START MAIN CONTENT AREA -->
                          <tr>
                            <td class="wrapper">
                              <p>Hi, Dear Admin.</p>
                              <p>Someone tried to contact us. They have sent their information via our contact us form. Please check their message and try to contact them.</p>
                              
                              <h4>User Info:</h4>
                              <p><b class="info_heading">Full Name: </b> '.$first_name. ' '.$last_name.'  </p>
                              <p><b class="info_heading">Email Address: </b> '.$email. ' </p>
                              <p><b class="info_heading">Subject: </b> '.$subject. '</p>
                              <p><b class="info_heading">Message: </b> '.$message. '</p>
                              <p><b class="info_heading">Submission Time and Date: </b> '.$dt. '</p>
                            </td>
                          </tr>
            
                          <!-- END MAIN CONTENT AREA -->
                          </table>
                        
            <!-- END CENTERED WHITE CONTAINER --></div>
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
              </body>
            </html>';

            try{
            
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'fardindevzet@gmail.com';                     //SMTP username
            $mail->Password   = 'bwbevufofgkflzor';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;      

            //Recipients
            $mail->setFrom('fardindevzet@gmail.com');
            $mail->addAddress('fardindevzet@gmail.com');     //Add a recipient
            $mail->addAddress($_POST['email']);               //Name is optional
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $_POST['subject'];
            $mail->Body = $htmlContent;

            $mail-> send();

        ?>
        <section class='thankyou_wrap'>
        <img class='thankyou_image' src='./media/thankyou.jpg'/>
        <h1 class='thankyou_title'>Thank you for Contacting us!</h1>
        <div class='thankyou_text'>
            <ul>
                <li>We have received your message.</li>
                <li>We'll reach you out immediately!</li>
                
        </ul>
        </div>
        <div>
            <h3 class='social_media_connect_title'>Let's Connect!</h3>
            <ul class='social_media_links'>
                <li class='facebook'><a href="<?php echo $facebook ?>"> <i class="fa fa-facebook-f"></i> </a></li>

                <li class='instragram'><a href="<?php echo $instragram ?>"> <i class="fa fa-instagram"></i> </a></li>

                <li class='linkedin'><a href="<?php echo $linkedin ?>"> <i class="fa fa-linkedin"></i> </a></li>

                <li class='youtube'><a href="<?php echo $youtube ?>"> <i class="fa fa-youtube"></i> </a></li>
            </ul>
        </div>
    </section>

   <?php } catch (Exception $e) {
            ?>
                  <section class='thankyou_wrap'>
                    <img class='error_image' src='./media/error.jpg'/>
                    <h1 class='thankyou_title'>Message could not be sent</h1>
                    <div class='thankyou_text'>
                            <ul>
                                <li> <?php echo $mail->ErrorInfo; ?></li>  
                            </ul>
                    </div>
                    <div>
                        <h3 class='social_media_connect_title'>Let's Connect!</h3>
                        <ul class='social_media_links'>
                            <li class='facebook'><a href="<?php echo $facebook ?>"> <i class="fa fa-facebook-f"></i> </a></li>
            
                            <li class='instragram'><a href="<?php echo $instragram ?>"> <i class="fa fa-instagram"></i> </a></li>
            
                            <li class='linkedin'><a href="<?php echo $linkedin ?>"> <i class="fa fa-linkedin"></i> </a></li>
            
                            <li class='youtube'><a href="<?php echo $youtube ?>"> <i class="fa fa-youtube"></i> </a></li>
                        </ul>
                    </div>
              </section>
              <?php
            }
        };
    ?>
</body>
</html>