<?php
include_once './author-ly.com.databasecred.php';
if (isset($_POST['step1'])){
    /* Using real escape string to avoid SQL injection attacks"*/
$name=mysqli_real_escape_string($conn,$_POST['customerName']);
$email=mysqli_real_escape_string($conn,$_POST['emailID']);
$mobile=mysqli_real_escape_string($conn,$_POST['mobileNumber']);
$projectName=mysqli_real_escape_string($conn,$_POST['projectName']);
$words=mysqli_real_escape_string($conn,$_POST['numberOfWords']);
$plan=mysqli_real_escape_string($conn,$_POST['plan']);
$instructions=mysqli_real_escape_string($conn,$_POST['specialInstructions']);

$sql="INSERT INTO `TableName`(`name`, `email`, `mobile`, `projectName`, `words`, `plan`, `instructions`) VALUES ('$name','$email','$mobile','$projectName','$words','$plan','$instructions');";
mysqli_query($conn,$sql);
}
else{
    header('Location: https://someLocationForInvalidEntry.com');
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$sender = 'contact@author-ly.com'; #your email
$senderName = 'Team author-ly';#your name for email
$recipient = $email;
$usernameSmtp = '#####################';#usernsame of SMTP server
$passwordSmtp = '#####################';#password of SMTP server
$host = 'smtp.yourserver.com'; #your host SMTP server
$port = 587;#465 optional
$subject = 'Content order notification | author-ly.vom';
$bodyHtml = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html data-editor-version="2" class="sg-campaigns" xmlns="http://www.w3.org/1999/xhtml"> <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> <meta http-equiv="X-UA-Compatible" content="IE=Edge"><!--[if (gte mso 9)|(IE)]> <xml> <o:OfficeDocumentSettings> <o:AllowPNG/> <o:PixelsPerInch>96</o:PixelsPerInch> </o:OfficeDocumentSettings> </xml><![endif]--><!--[if (gte mso 9)|(IE)]> <style type="text/css"> body{width: 600px;margin: 0 auto;}table{border-collapse: collapse;}table, td{mso-table-lspace: 0pt;mso-table-rspace: 0pt;}img{-ms-interpolation-mode: bicubic;}</style><![endif]--> <style type="text/css"> body, p, div{font-family: tahoma,geneva,sans-serif; font-size: 14px;}body{color: #050505;}body a{color: #f67a00; text-decoration: none;}p{margin: 0; padding: 0;}table.wrapper{width:100% !important; table-layout: fixed; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; -moz-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}img.max-width{max-width: 100% !important;}.column.of-2{width: 50%;}.column.of-3{width: 33.333%;}.column.of-4{width: 25%;}@media screen and (max-width:480px){.preheader .rightColumnContent, .footer .rightColumnContent{text-align: left !important;}.preheader .rightColumnContent div, .preheader .rightColumnContent span, .footer .rightColumnContent div, .footer .rightColumnContent span{text-align: left !important;}.preheader .rightColumnContent, .preheader .leftColumnContent{font-size: 80% !important; padding: 5px 0;}table.wrapper-mobile{width: 100% !important; table-layout: fixed;}img.max-width{height: auto !important; max-width: 100% !important;}a.bulletproof-button{display: block !important; width: auto !important; font-size: 80%; padding-left: 0 !important; padding-right: 0 !important;}.columns{width: 100% !important;}.column{display: block !important; width: 100% !important; padding-left: 0 !important; padding-right: 0 !important; margin-left: 0 !important; margin-right: 0 !important;}.social-icon-column{display: inline-block !important;}}</style> </head> <body> <center class="wrapper" data-link-color="#f67a00" data-body-style="font-size:14px; font-family:tahoma,geneva,sans-serif; color:#050505; background-color:#ffffff;"> <div class="webkit"> <table cellpadding="0" cellspacing="0" border="0" width="100%" class="wrapper" bgcolor="#ffffff"> <tr> <td valign="top" bgcolor="#ffffff" width="100%"> <table width="100%" role="content-container" class="outer" align="center" cellpadding="0" cellspacing="0" border="0"> <tr> <td width="100%"> <table width="100%" cellpadding="0" cellspacing="0" border="0"> <tr> <td><!--[if mso]> <center> <table><tr><td width="600"><![endif]--> <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%; max-width:600px;" align="center"> <tr> <td role="modules-container" style="padding:0px 0px 0px 0px; color:#050505; text-align:left;" bgcolor="#FFFFFF" width="100%" align="left"><table class="module preheader preheader-hide" role="module" data-type="preheader" border="0" cellpadding="0" cellspacing="0" width="100%" style="display: none !important; mso-hide: all; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;"> <tr> <td role="module-content"> <p>Confirmation message for your recently filled form at author-ly.com</p></td></tr></table><table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="20bb7d69-9f78-4471-8c81-d90abcd89642"> <tbody> <tr> <td style="font-size:6px; line-height:10px; padding:0px 50px 0px 50px;" valign="top" align="center"> <a href="http://author-ly.com.s3-website.ap-south-1.amazonaws.com/CommonFiles/AUTHORLYlogo.png"><img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:100% !important; width:100%; height:auto !important;padding-bottom:75px;" width="600" alt="author-ly.com_officialLogo" data-proportionally-constrained="true" data-responsive="true" src="http://cdn.mcauto-images-production.sendgrid.net/d3d634e52e100298/763e6494-0eaa-4279-a126-043194c56a4f/795x177.png"></a></td></tr></tbody> </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="2088e3fc-94d9-4582-84d6-d1242a3809ca" data-mc-module-version="2019-10-22"> <tbody> <tr> <td style="padding:18px 15px 18px 15px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="font-size: 18px; font-family: helvetica, sans-serif">Greetings '.$name.',</span></div><div style="font-family: inherit; text-align: inherit"><br></div><div style="font-family: inherit; text-align: inherit"><span style="font-size: 16px; font-family: helvetica, sans-serif">You have successfully initiated your content order process. Our team will reach out to you and will deliver your content as per your plan.</span></div><div style="font-family: inherit; text-align: inherit"><br></div><div style="font-family: inherit; text-align: inherit"><span style="font-size: 16px; font-family: helvetica, sans-serif">Sit back and relax your content is on its way.</span></div><div style="font-family: inherit; text-align: inherit"><br></div><div style="font-family: inherit; text-align: inherit"><span style="font-size: 16px; font-family: helvetica, sans-serif">At your service,</span></div><div style="font-family: inherit; text-align: inherit"><span style="font-size: 16px; font-family: helvetica, sans-serif">author-ly.com</span></div><div></div></div></td></tr></tbody> </table><table class="module" role="module" data-type="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="3b4c469e-2514-4469-9f52-4f0980421c0d"> <tbody> <tr> <td style="padding:0px 0px 0px 0px;" role="module-content" height="100%" valign="top" bgcolor=""> <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="2px" style="line-height:2px; font-size:2px;"> <tbody> <tr> <td style="padding:0px 0px 2px 0px;" bgcolor="#000000"></td></tr></tbody> </table> </td></tr></tbody> </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="a4ce6757-af26-4592-88e3-179f19663854" data-mc-module-version="2019-10-22"> <tbody> <tr> <td style="padding:18px 12px 0px 12px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="font-family: tahoma, geneva, sans-serif">Visit our website for more information </span><a href="https://www.author-ly.com"><span style="font-family: tahoma, geneva, sans-serif">www.author-ly.com</span></a></div><div style="font-family: inherit; text-align: inherit"><br></div><div style="font-family: inherit; text-align: inherit"><span style="font-family: tahoma, geneva, sans-serif">Feel free to contact us by replying to this mail or via below mentioned methods.</span></div><div></div></div></td></tr></tbody> </table><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" data-type="columns" style="padding:0px 15px 0px 15px;" bgcolor="#FFFFFF"> <tbody> <tr role="module-content"> <td height="100%" valign="top"><table width="275" style="width:275px; border-spacing:0; border-collapse:collapse; margin:0px 10px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-0"> <tbody> <tr> <td style="padding:0px;margin:0px;border-spacing:0;"><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="bf9db1b0-4702-48f1-930f-33e433d785ff" data-mc-module-version="2019-10-22"> <tbody> <tr> <td style="padding:18px 0px 0px 0px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="font-family: tahoma, geneva, sans-serif">Mobile : +91-</span><a href="tel:91951851424"><span style="font-family: tahoma, geneva, sans-serif">9518561424</span></a></div><div></div></div></td></tr></tbody> </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="287ebee4-5f2e-49cb-9786-c2ee92f43cb3" data-mc-module-version="2019-10-22"> <tbody> <tr> <td style="padding:0px 0px 18px 0px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="font-family: tahoma, geneva, sans-serif">Mail us : </span><a href="mailto:contact@author-ly.com"><span style="font-family: tahoma, geneva, sans-serif">contact@author-ly.com</span></a></div><div></div></div></td></tr></tbody> </table></td></tr></tbody> </table><table width="275" style="width:275px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 10px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-1"> <tbody> <tr> <td style="padding:0px;margin:0px;border-spacing:0;"><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="6c92eb5e-9e0a-4905-865f-b01c43f48ea8" data-mc-module-version="2019-10-22"> <tbody> <tr> <td style="padding:18px 0px 0px 0px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="font-family: tahoma, geneva, sans-serif">Connect on WhatsApp : </span><a href="https://wa.me/919518561424?text=Hello%2C%0D%0AI+want+some+details+regarding+the+services+provided+by+you."><span style="font-family: tahoma, geneva, sans-serif">click here</span></a></div><div></div></div></td></tr></tbody> </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="9c578916-f79d-468c-a514-4e4ff0fb435d" data-mc-module-version="2019-10-22"> <tbody> <tr> <td style="padding:0px 0px 18px 0px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="font-family: tahoma, geneva, sans-serif">Connect on Instagram : </span><a href="https://www.instagram.com/author_ly/"><span style="font-family: tahoma, geneva, sans-serif">clcik here</span></a></div><div></div></div></td></tr></tbody> </table></td></tr></tbody> </table></td></tr></tbody> </table><table class="module" role="module" data-type="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="3b4c469e-2514-4469-9f52-4f0980421c0d.1"> <tbody> <tr> <td style="padding:0px 0px 0px 0px;" role="module-content" height="100%" valign="top" bgcolor=""> <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" height="2px" style="line-height:2px; font-size:2px;"> <tbody> <tr> <td style="padding:0px 0px 2px 0px;" bgcolor="#000000"></td></tr></tbody> </table> </td></tr></tbody> </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="2088e3fc-94d9-4582-84d6-d1242a3809ca.1"> <tbody> <tr> <td style="padding:18px 15px 18px 15px; line-height:22px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="font-family: helvetica, sans-serif; font-size: 14px">AUTHOR-LY</span></div><div style="font-family: inherit; text-align: inherit"><span style="font-family: helvetica, sans-serif; font-size: 14px">Excellent content, super-quick delivery : Designed for your success</span></div><div></div></div></td></tr></tbody> </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="09ff8ae2-fbc8-403f-96cf-0a44b0577851" data-mc-module-version="2019-10-22"> <tbody> <tr> <td style="padding:18px 0px 18px 0px; line-height:10px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: center"><span style="font-size: 13px; color: #707070">This is a system genrated mail. You can reply to this mail in order to get in touch with us.</span></div><div style="font-family: inherit; text-align: center"><br></div><div style="font-family: inherit; text-align: center"><span style="font-size: 10px; color: #707070">You received this mail because your mail ID is provided to us for content order.</span></div><div style="font-family: inherit; text-align: center"><span style="font-size: 10px; color: #707070">If you have not made this transaction please let us know by replying to this mail.</span></div><div style="font-family: inherit; text-align: center"><br></div><div style="font-family: inherit; text-align: center"><span style="font-size: 10px; color: #707070">author-ly.com | contact@author-ly.com</span></div><div></div></div></td></tr></tbody> </table></td></tr></table><!--[if mso]> </td></tr></table> </center><![endif]--> </td></tr></table> </td></tr></table> </td></tr></table> </div></center> </body> </html>';
$bodyText =  strip_tags($bodyHtml); #if problem occurs while loading the email in email client
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->setFrom($sender, $senderName);
    $mail->Username   = $usernameSmtp; 
    $mail->Password   = $passwordSmtp;
    $mail->Host       = $host;
    $mail->Port       = $port;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';
    $mail->addReplyTo('contact@author-ly.com', 'Team AUTHOR-LY'); #your email & name for email
    /* $mail->addBCC('mailofBCC2example.com','John Doe');
    $mail->addAddress($recipient);
    $mail->isHTML(true);
    $mail->Subject    = $subject;
    $mail->Body       = $bodyHtml;
    $mail->AltBody    = $bodyText;
    $mail->Send();
    $EmailSent="yes";
} catch (phpmailerException $e) {
    echo "An error occurred.";
    $EmailSent="no";
} catch (Exception $e) {
    echo "Email not sent.";
    $EmailSent="no";
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169334386-1"></script> <script>window.dataLayer=window.dataLayer || []; function gtag(){dataLayer.push(arguments);}gtag('js', new Date()); gtag('config', 'UA-169334386-1');</script> <script src="https://www.googleoptimize.com/optimize.js?id=OPT-5556XLD"></script> 
      <meta charset="UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Content Order Initiated successfully | Author-ly</title>
      <link rel="icon" type="image/png" href="/favicon.ico">
      <meta name="description" content="THE TOP PROFESSIONAL CONTENT WRITERS who are experts in Content creation, SEO, and Digital marketing. Hire the best content writers with just a few clicks.">
      <link rel="stylesheet" href="css/navbar.css"/>
      <link rel="stylesheet" href="css/order-content.css">
   </head>
   <body>
      <header>
         <div class="contactDetailsTopmost" id="top">
            <div class="contactInfoBlank"></div>
            <div class="contactInfo">
               <div>
                  <a href="tel:919518461424">
                     <svg height="20" style="padding-right: 1rem;" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                           <path d="M367.973 512C351.446 512 335.058 509.078 319.034 503.256C248.439 477.611 182.911 435.843 129.534 382.466C76.1559 329.089 34.3876 263.561 8.74363 192.966C0.50297 170.279 -1.92893 146.86 1.51793 123.357C4.7468 101.342 13.2744 79.9697 26.1799 61.5505C39.1424 43.0502 56.4237 27.6629 76.1549 17.0523C97.196 5.73776 120.162 0 144.417 0C151.961 0 158.48 5.27078 160.061 12.6465L185.174 129.841C186.311 135.147 184.68 140.669 180.844 144.507L137.932 187.417C178.413 267.9 244.098 333.585 324.581 374.066L367.491 331.154C371.328 327.318 376.851 325.689 382.157 326.824L499.352 351.937C506.728 353.517 511.998 360.037 511.998 367.581C511.998 391.836 506.26 414.803 494.945 435.844C484.334 455.575 468.947 472.857 450.447 485.819C432.028 498.725 410.656 507.252 388.64 510.481C381.741 511.494 374.844 511.999 367.973 512V512ZM131.634 32.6987C99.6399 36.2305 71.2431 52.9998 52.3858 79.9137C31.1807 110.177 26.2359 147.401 38.8194 182.042C88.1214 317.762 194.238 423.879 329.958 473.181C364.598 485.764 401.823 480.82 432.086 459.614C459 440.757 475.77 412.36 479.301 380.366L383.964 359.937L339.15 404.751C334.381 409.52 327.136 410.787 321.034 407.919C225.848 363.201 148.799 286.152 104.081 190.966C101.214 184.863 102.48 177.618 107.249 172.85L152.063 128.036L131.634 32.6987Z" fill="white"/>
                           <path d="M496 271.989C487.164 271.989 480 264.825 480 255.989C480 132.481 379.518 31.9987 256.009 31.9987C247.174 31.9987 240.01 24.835 240.01 15.9993C240.01 7.16371 247.174 0 256.009 0C324.388 0 388.672 26.6269 437.022 74.9769C485.372 123.327 511.999 187.611 511.999 255.989C511.999 264.825 504.836 271.989 496 271.989Z" fill="white"/>
                           <path d="M432.002 271.989C423.167 271.989 416.003 264.825 416.003 255.99C416.003 167.769 344.23 95.9961 256.009 95.9961C247.174 95.9961 240.01 88.8324 240.01 79.9967C240.01 71.1611 247.174 63.9974 256.009 63.9974C361.874 63.9974 448.002 150.125 448.002 255.99C448.002 264.825 440.839 271.989 432.002 271.989Z" fill="white"/>
                           <path d="M368.005 271.989C359.169 271.989 352.006 264.825 352.006 255.99C352.006 203.057 308.942 159.993 256.009 159.993C247.174 159.993 240.01 152.83 240.01 143.994C240.01 135.158 247.174 127.995 256.009 127.995C326.587 127.995 384.004 185.412 384.004 255.99C384.004 264.825 376.842 271.989 368.005 271.989Z" fill="white"/>
                        </g>
                        <defs>
                           <clipPath id="clip0">
                              <rect width="512" height="512" fill="white"/>
                           </clipPath>
                        </defs>
                     </svg>
                     <span>+91-9518461424</span>
                  </a>
               </div>
               <div>
                  <a href="mailto:contact@author-ly.com" target="_blank">
                     <svg style="padding-right: 1rem;" height="17" viewBox="0 0 313 228" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                           <path d="M283.656 -0.000244141H29.3439C13.1627 -0.000244141 0 12.784 0 28.5V199.5C0 215.216 13.1627 228 29.3439 228H283.656C299.837 228 313 215.216 313 199.5V28.5C313 12.784 299.837 -0.000244141 283.656 -0.000244141ZM283.656 18.9997C284.985 18.9997 286.249 19.2675 287.405 19.7352L156.5 129.929L25.5943 19.7352C26.7501 19.2681 28.0144 18.9997 29.3433 18.9997H283.656ZM283.656 208.999H29.3439C23.9471 208.999 19.5624 204.742 19.5624 199.499V39.8088L150.09 149.68C151.934 151.229 154.217 152 156.5 152C158.783 152 161.066 151.23 162.91 149.68L293.438 39.8088V199.5C293.437 204.742 289.053 208.999 283.656 208.999Z" fill="white"/>
                        </g>
                        <defs>
                           <clipPath id="clip0">
                              <rect width="313" height="228" fill="white"/>
                           </clipPath>
                        </defs>
                     </svg>
                     <span>contact@author-ly.com</span>
                  </a>
               </div>
            </div>
         </div>
         <nav>
            <div id="navigation-panel">
               <div id="nav-logo" class="logo"> <a href="#"><img src="http://author-ly.com.s3-website.ap-south-1.amazonaws.com/CommonFiles/AUTHORLY.png" alt="Official Logo of author-ly.com"/></a> </div>
               <ul class="nav-list textFormal">
                  <li class=" " id="homeLink"><a class="scroll" id="slideBar" href="#top">Home</a></li>
                  <li class=" " id="featuresLink"><a class="scroll" id="slideBar" href="#features">Features</a></li>
                  <li class=" " id="aboutLink"><a class="scroll" id="slideBar" remhref="#about">About us</a></li>
                  <li class=" " id="pricingLink"><a class="scroll" id="slideBar" href="#pricing">Pricing</a></li>
                  <li class="active"><a id="slideBar" href="#order">Order content</a></li>
               </ul>
               <div class="burger" id="slideBar">
                  <div class="line1" id="slideBar"></div>
                  <div class="line2" id="slideBar"></div>
                  <div class="line3" id="slideBar"></div>
               </div>
            </div>
         </nav>
      </header>
      <div class="mainContainer">
         <section class="banner-area">
            <div style="position: relative;top: 25%;width: 80%;margin-left: 10%; text-align: center;">
               <p class="instruction"><span class="greeting"><?php echo ("Greetings, ".$name); ?></span> <span class="Instructionheading"> Your form is successfully submitted. Thank you ! </span> <span style="display:inline;color: rgb(151, 151, 151);font-size: 1.2rem;">(Payment details will be conveyed through mail.)</span> </p>
               <label for="" class="labelsIndepedent" style="font-size: 1.9rem;">You will receive a mail of confirmation on <?php echo $email;?> shortly. <br><br><span style="display:inline;color: rgb(151, 151, 151);font-size: 1.2rem;">You will be redirected to homepage in 10 seconds.</span></label> 
            </div>
            <footer class="footer-black" id="footer" style="position: relative;top:25%;">
               <div class="branding">
                  <h1>AUTHOR-LY <span>Excellent Content, Super-quick Delivery: Designed for Your Success</span></h1>
               </div>
               <div class="footer-text">
                  <div class="footer-container">
                     <p class="footerHeading">ADDRESS</p>
                     <p class="footerText">Near Dhantoli police station <br>Ghare lane 440010 <br>Nagpur, Maharashtra</p>
                  </div>
                  <div class="footer-container">
                     <p class="footerHeading">CONTACT</p>
                     <p class="footerText">
                        <a href="tel:919518461424">
                           <svg style="padding-right: 1rem;" height="25" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M367.973 512C351.446 512 335.058 509.078 319.034 503.256C248.439 477.611 182.911 435.843 129.534 382.466C76.1559 329.089 34.3876 263.561 8.74363 192.966C0.50297 170.279 -1.92893 146.86 1.51793 123.357C4.7468 101.342 13.2744 79.9697 26.1799 61.5505C39.1424 43.0502 56.4237 27.6629 76.1549 17.0523C97.196 5.73776 120.162 0 144.417 0C151.961 0 158.48 5.27078 160.061 12.6465L185.174 129.841C186.311 135.147 184.68 140.669 180.844 144.507L137.932 187.417C178.413 267.9 244.098 333.585 324.581 374.066L367.491 331.154C371.328 327.318 376.851 325.689 382.157 326.824L499.352 351.937C506.728 353.517 511.998 360.037 511.998 367.581C511.998 391.836 506.26 414.803 494.945 435.844C484.334 455.575 468.947 472.857 450.447 485.819C432.028 498.725 410.656 507.252 388.64 510.481C381.741 511.494 374.844 511.999 367.973 512ZM131.634 32.6987C99.6399 36.2305 71.2431 52.9998 52.3858 79.9137C31.1807 110.177 26.2359 147.401 38.8194 182.042C88.1214 317.762 194.238 423.879 329.958 473.181C364.598 485.764 401.823 480.82 432.086 459.614C459 440.757 475.77 412.36 479.301 380.366L383.964 359.937L339.15 404.751C334.381 409.52 327.136 410.787 321.034 407.919C225.848 363.201 148.799 286.152 104.081 190.966C101.214 184.863 102.48 177.618 107.249 172.85L152.063 128.036L131.634 32.6987Z" fill="#FFB53D"/>
                              <path d="M496 271.989C487.164 271.989 480 264.825 480 255.989C480 132.481 379.518 31.9987 256.009 31.9987C247.174 31.9987 240.01 24.835 240.01 15.9993C240.01 7.16371 247.174 0 256.009 0C324.388 0 388.672 26.6269 437.022 74.9769C485.372 123.327 511.999 187.611 511.999 255.989C511.999 264.825 504.836 271.989 496 271.989Z" fill="#FFB53D"/>
                              <path d="M432.002 271.989C423.167 271.989 416.003 264.825 416.003 255.99C416.003 167.769 344.23 95.9961 256.009 95.9961C247.174 95.9961 240.01 88.8324 240.01 79.9967C240.01 71.1611 247.174 63.9974 256.009 63.9974C361.874 63.9974 448.002 150.125 448.002 255.99C448.002 264.825 440.839 271.989 432.002 271.989Z" fill="#FFB53D"/>
                              <path d="M368.005 271.989C359.169 271.989 352.006 264.825 352.006 255.99C352.006 203.057 308.942 159.993 256.009 159.993C247.174 159.993 240.01 152.83 240.01 143.994C240.01 135.158 247.174 127.995 256.009 127.995C326.587 127.995 384.004 185.412 384.004 255.99C384.004 264.825 376.842 271.989 368.005 271.989Z" fill="#FFB53D"/>
                           </svg>
                           <span>+91-9518461424</span>
                        </a>
                     </p>
                     <p class="footerText">
                        <a href="mailto:contact@author-ly.com" target="_blank">
                           <svg style="padding-right: 1rem;" height="20" viewBox="0 0 313 228" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M283.656 -0.000244141H29.3439C13.1627 -0.000244141 0 12.784 0 28.5V199.5C0 215.216 13.1627 228 29.3439 228H283.656C299.837 228 313 215.216 313 199.5V28.5C313 12.784 299.837 -0.000244141 283.656 -0.000244141ZM283.656 18.9997C284.985 18.9997 286.249 19.2675 287.405 19.7352L156.5 129.929L25.5943 19.7352C26.7501 19.2681 28.0144 18.9997 29.3433 18.9997H283.656ZM283.656 208.999H29.3439C23.9471 208.999 19.5624 204.742 19.5624 199.499V39.8088L150.09 149.68C151.934 151.229 154.217 152 156.5 152C158.783 152 161.066 151.23 162.91 149.68L293.438 39.8088V199.5C293.437 204.742 289.053 208.999 283.656 208.999Z" fill="#FFB53D"/>
                           </svg>
                           <span>contact@author-ly.com</span>
                        </a>
                     </p>
                     <p class="footerText connectIcon">
                        <a href="https://instagram.com/author_ly" target="_blank">
                           <svg height="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="42.966156268" x2="469.0337477" y1="469.0296477168" y2="42.9620562848">
                                 <stop offset="0" stop-color="#ffd600"/>
                                 <stop offset=".5" stop-color="#ff0100"/>
                                 <stop offset="1" stop-color="#d800b9"/>
                              </linearGradient>
                              <linearGradient id="b" gradientUnits="userSpaceOnUse" x1="163.0429956456" x2="348.9539083464" y1="348.9538083312" y2="163.0428956304">
                                 <stop offset="0" stop-color="#ff6400"/>
                                 <stop offset=".5" stop-color="#ff0100"/>
                                 <stop offset="1" stop-color="#fd0056"/>
                              </linearGradient>
                              <linearGradient id="c" gradientUnits="userSpaceOnUse" x1="370.9291325432" x2="414.3727849912" y1="141.0676714336" y2="97.6240189856">
                                 <stop offset="0" stop-color="#f30072"/>
                                 <stop offset="1" stop-color="#e50097"/>
                              </linearGradient>
                              <path d="m510.460938 150.453125c-1.246094-27.25-5.574219-45.859375-11.902344-62.140625-6.425782-17.082031-16.503906-32.554688-29.527344-45.34375-12.785156-13.023438-28.261719-23.105469-45.34375-29.535156-16.285156-6.324219-34.890625-10.648438-62.140625-11.886719-27.300781-1.25-36.023437-1.546875-105.546875-1.546875s-78.246094.296875-105.546875 1.539062c-27.25 1.246094-45.855469 5.574219-62.140625 11.902344-17.082031 6.425782-32.554688 16.503906-45.34375 29.527344-13.023438 12.785156-23.105469 28.257812-29.535156 45.339844-6.324219 16.285156-10.648438 34.894531-11.886719 62.140625-1.25 27.304687-1.546875 36.023437-1.546875 105.546875 0 69.527344.296875 78.25 1.546875 105.550781 1.242187 27.246094 5.570313 45.855469 11.898437 62.140625 6.425782 17.078125 16.503907 32.554688 29.527344 45.339844 12.785156 13.023437 28.261719 23.101562 45.34375 29.527344 16.28125 6.332031 34.890625 10.65625 62.140625 11.902343 27.304688 1.246094 36.023438 1.539063 105.546875 1.539063 69.523438 0 78.246094-.292969 105.546875-1.539063 27.25-1.246093 45.855469-5.570312 62.140625-11.902343 34.386719-13.296876 61.570313-40.480469 74.867188-74.867188 6.332031-16.285156 10.65625-34.894531 11.902344-62.140625 1.242187-27.304687 1.539062-36.023437 1.539062-105.546875 0-69.527344-.296875-78.246094-1.539062-105.546875zm-46.082032 208.996094c-1.136718 24.960937-5.308594 38.515625-8.8125 47.535156-8.613281 22.328125-26.257812 39.972656-48.585937 48.585937-9.019531 3.503907-22.574219 7.675782-47.535157 8.8125-26.988281 1.234376-35.085937 1.492188-103.445312 1.492188-68.363281 0-76.457031-.257812-103.449219-1.492188-24.957031-1.136718-38.511719-5.308593-47.535156-8.8125-11.117187-4.105468-21.175781-10.648437-29.433594-19.152343-8.503906-8.257813-15.046875-18.3125-19.152343-29.433594-3.503907-9.019531-7.675782-22.574219-8.8125-47.535156-1.230469-26.992188-1.492188-35.089844-1.492188-103.445313 0-68.359375.261719-76.453125 1.492188-103.449218 1.140624-24.960938 5.308593-38.515626 8.8125-47.535157 4.105468-11.121093 10.652343-21.179687 19.152343-29.4375 8.257813-8.503906 18.316407-15.046875 29.4375-19.148437 9.019531-3.507813 22.574219-7.675782 47.535157-8.816406 26.992187-1.230469 35.089843-1.492188 103.445312-1.492188h-.003906c68.355468 0 76.453125.261719 103.449218 1.496094 24.960938 1.136718 38.511719 5.308594 47.535157 8.8125 11.117187 4.105468 21.175781 10.648437 29.433593 19.148437 8.503907 8.257813 15.046876 18.316407 19.148438 29.4375 3.507812 9.019531 7.679688 22.574219 8.816406 47.535157 1.230469 26.992187 1.492188 35.089843 1.492188 103.445312 0 68.359375-.257813 76.453125-1.492188 103.449219zm0 0" fill="url(#a)"/>
                              <path d="m255.996094 124.539062c-72.601563 0-131.457032 58.859376-131.457032 131.460938s58.855469 131.457031 131.457032 131.457031c72.605468 0 131.460937-58.855469 131.460937-131.457031s-58.855469-131.460938-131.460937-131.460938zm0 216.792969c-47.125-.003906-85.332032-38.207031-85.328125-85.335937 0-47.125 38.203125-85.332032 85.332031-85.332032 47.128906.003907 85.332031 38.207032 85.332031 85.332032 0 47.128906-38.207031 85.335937-85.335937 85.335937zm0 0" fill="url(#b)"/>
                              <path d="m423.371094 119.347656c0 16.964844-13.753906 30.71875-30.71875 30.71875-16.96875 0-30.722656-13.753906-30.722656-30.71875 0-16.96875 13.753906-30.722656 30.722656-30.722656 16.964844 0 30.71875 13.753906 30.71875 30.722656zm0 0" fill="url(#c)"/>
                           </svg>
                        </a>
                        <a href="https://wa.me/919518561424?text=Hello%2C%0D%0AI+want+some+details+regarding+the+services+provided+by+you." target="_blank">
                           <svg height="32" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                              <path style="fill:#4CAF50;" d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104 l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z"/>
                              <path style="fill:#FAFAFA;" d="M405.024,361.504c-6.176,17.44-30.688,31.904-50.24,36.128c-13.376,2.848-30.848,5.12-89.664-19.264 C189.888,347.2,141.44,270.752,137.664,265.792c-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624,26.176-62.304 c6.176-6.304,16.384-9.184,26.176-9.184c3.168,0,6.016,0.16,8.576,0.288c7.52,0.32,11.296,0.768,16.256,12.64 c6.176,14.88,21.216,51.616,23.008,55.392c1.824,3.776,3.648,8.896,1.088,13.856c-2.4,5.12-4.512,7.392-8.288,11.744 c-3.776,4.352-7.36,7.68-11.136,12.352c-3.456,4.064-7.36,8.416-3.008,15.936c4.352,7.36,19.392,31.904,41.536,51.616 c28.576,25.44,51.744,33.568,60.032,37.024c6.176,2.56,13.536,1.952,18.048-2.848c5.728-6.176,12.8-16.416,20-26.496 c5.12-7.232,11.584-8.128,18.368-5.568c6.912,2.4,43.488,20.48,51.008,24.224c7.52,3.776,12.48,5.568,14.304,8.736 C411.2,329.152,411.2,344.032,405.024,361.504z"/>
                           </svg>
                        </a>
                     </p>
                  </div>
                  <div class="footer-container">
                     <p class="footerHeading">Go To</p>
                     <a href="#top" class="scroll">
                        <p class="footerText">HOME</p>
                     </a>
                     <a href="#features" class="scroll">
                        <p class="footerText">FEATURES</p>
                     </a>
                     <a href="#about" class="scroll">
                        <p class="footerText">ABOUT US</p>
                     </a>
                     <a href="#pricing" class="scroll">
                        <p class="footerText">PRICING</p>
                     </a>
                     <a href="/order-content.html" class="scroll">
                        <p class="footerText">ORDER CONTENT</p>
                     </a>
                  </div>
               </div>
               <div class="branding">
                  <h1><span style="font-weight: 600;">Concept & Initiative by <span style="color: var(--primary-color);font-weight: 800;font-size: 1.8rem;">Sparsh Sunilkumar Thakrani</span> </span></h1>
               </div>
               <div class="copyright"> <span>&copy; Tanay Patel 2021 | Designed & Developed by <a href="https://linkedin.com/in/tanaydpatel" target="_blank" style="color: peru;">Tanay Patel</a> </span> </div>
            </footer>
         </section>
         <section class="whatsAppLink" id="whatsApp">
            <div class="whatsAppBlockBlank"></div>
            <div class="actaulWhatsAppLink"><a class="fixedWhatsAppLink" href="https://wa.me/919518561424?text=Hello%2C%0D%0AI+want+some+details+regarding+the+services+provided+by+you."> Connect on WhatsApp <img class="logo" src="img/WhatsApp.svg" alt="WhatsApp ICON | author-ly.com"> </a></div>
         </section>
      </div>
      <script>window.addEventListener("scroll", function () { let menuArea = document.getElementById("navigation-panel"); if (window.pageYOffset > 10) { menuArea.classList.add("cus-nav"); menuArea.style = "top: 0"; } else { menuArea.classList.remove("cus-nav"); menuArea.style = "top: 4rem"; } }); const navSlide = () => { const burger = document.querySelector(".burger"); const nav = document.querySelector(".nav-list"); const main = document.querySelector(".mainContainer"); burger.addEventListener("click", () => { nav.classList.toggle("nav-active"); document.addEventListener("click", (e) => { if (e.target.id !== "slideBar") { document.querySelector(".nav-list").classList.remove("nav-active"); main.classList.remove("blur"); burger.classList.remove("toggleCross"); if (window.pageYOffset < 10) { document.getElementById("navigation-panel").classList.remove("cus-nav"); } } }); if (window.pageYOffset < 10) { document.getElementById("navigation-panel").classList.toggle("cus-nav"); } main.classList.toggle("blur"); burger.classList.toggle("toggleCross"); }); }; navSlide(); document.querySelector(".nav-list").addEventListener("click", () => { if (window.innerWidth < 801) { document.querySelector(".nav-list").classList.toggle("nav-active"); document.querySelector(".mainContainer").classList.toggle("blur"); document.querySelector(".burger").classList.toggle("toggleCross"); if (window.pageYOffset < 10) { document.getElementById("navigation-panel").classList.toggle("cus-nav"); } } }); console.log("%cThis website is designed,developed and deployed byn ttttttttTANAY PATEL", "color:#ff8b07;font-size:25px;font-family:sans-serif"); console.log("%c https://www.linkedin.com/in/tanaydpatel", "color:red;font-size:18px;"); setTimeout(function () { window.location.replace("https://www.author-ly.com"); }, 5000);</script>
   </body>
</html>
