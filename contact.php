 <?php

if (isset($_POST['submit'])) {
  
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $number  = $_POST['number'];
    $message = $_POST['message'];
    
     $to      = "ankit111pandey@gmail.com"; // admin mail address
     $subject = "Contact us form";
     $headers = "MIME-Version: 1.0\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     $headers .= 'From: Contact Us <ankit111pandey@gmail.com>' . "\r\n";
     $headers .= "Reply-To: Contact Us <ankit111pandey@gmail.com>";
     $headers .= "X-Sender: Contact Us <ankit111pandey@gmail.com>\n";
     $headers .= 'X-Mailer: PHP/' . phpversion();
     $headers .= "X-Priority: 1\n";
     $headers .= "Return-Path: ankit111pandey@gmail.com\n";
     $body= '<html> <head> <title>Contact us mail</title>  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <style type="text/css"> #outlook a { padding: 0; } .ReadMsgBody { width: 100%; } .ExternalClass { width: 100%; } .ExternalClass * { line-height: 100%; } body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; } table, td { border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; } img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; } p { display: block; margin: 13px 0; } @media only screen and (max-width: 480px) { @-ms-viewport { width: 320px; } @viewport { width: 320px; } } </style> <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css"> <style type="text/css"> @media only screen and (min-width: 480px) { .mj-column-per-100, * [aria-labelledby="mj-column-per-100"] { width: 100% !important; } } </style> </head><body style="background: #F9F9F9;"> <div style="background-color:#F9F9F9;"> <div style="max-width:640px;margin:0 auto;box-shadow:0px 1px 5px rgba(0,0,0,0.1);border-radius:4px;overflow:hidden"> <div style="margin:0px auto;max-width:640px;background:#de9c45 url(image/verification-mail.png"> <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%; > <tbody><tr> <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:45px 0px 40px 0px;"> <div style="cursor:auto;color:white;font-family:Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;font-size:36px;font-weight:600;line-height:36px;text-align:center;">Contact us mail!</div> </td> </tr> </tbody> </table> </div> <div style="margin:0px auto;max-width:640px;background:#ffffff;"> <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:#ffffff;" align="center" border="0"> <tbody> <tr> <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:40px 70px;"> <div aria-labelledby="mj-column-per-100" class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"> <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"> <tbody> <tr> <td style="word-break:break-word;font-size:0px;padding:0px 0px 20px;" align="left"> <div style="cursor:auto;color:#737F8D;font-family:Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;font-size:16px;line-height:24px;text-align:left;"> <h2 style="font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;font-weight: 500;font-size: 20px;color: #4F545C;letter-spacing: 0.27px;">Hey ' . $name . '</h2>Email Address : ' . $email .' <br>Phone Number : ' . $number . ' <br> Message : ' . $message . '  <p>Wowwee! Thanks for Contact us! </p> <p>Thank you for showing interest with us. By taking this initial step, you are already well on your way to meeting with you .</p> </div> </td> </tr> <tr> <td style="word-break:break-word;font-size:0px;padding:10px 25px;" align="center"> <table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:separate;" align="center" border="0"> <tbody> <tr> <td style="border:none;border-radius:30px;color:white;cursor:auto;padding:10px 25px;" align="center" valign="middle" bgcolor="#de9c45"> <a href="#confirm.php?user_email=" . $user_email . "&verify_code=" . $verify . "" style="text-decoration:none;line-height:100%;background:#de9c45;color:white;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:15px;font-weight:normal;text-transform:none;margin:0px;" target="_blank">Thank You</a></td> </tr> </tbody> </table> </td></tr> </tbody></table> <div> </td> </tr> </tbody> </table> </div> </div> <div style="margin:0px auto;max-width:640px;background:transparent;"> <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:transparent;" align="center" border="0"> <tbody> <tr> <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"> <div aria-labelledby="mj-column-per-100" class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"> <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"> <tbody> <tr> <td style="word-break:break-word;font-size:0px;padding:0px;" align="center"> <div style="cursor:auto;color:#99AAB5;font-family:Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;font-size:12px;line-height:24px;text-align:center;"> Sent by admin • <a href="#" style="color:#de9c45;text-decoration:none;" target="_blank">check our website</a> </div> </td> </tr> </tbody> </table> </div> </td> </tr> </tbody> </table> </div> </div> </body> </html>';
    
     $admin = mail($to,$subject,$body,$headers);
     $user= mail($email,$subject,$body,$headers);
   
    if($admin)
    {
        if($user)
        {
            echo "<script>alert('Message Send Successfully !')</script>";
            echo "<script>window.open('index.html','_self')</script>";
        }
    }
    else
    {
        echo "<script>alert('Oops something wrong Please try again later')</script>";
    }
}

?>
