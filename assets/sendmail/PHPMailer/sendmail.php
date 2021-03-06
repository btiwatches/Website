    <!--[if (gte mso 9)|(IE)]>
    <style type="text/css">
        body {width: 600px;margin: 0 auto;}
        table {border-collapse: collapse;}
        table, td {mso-table-lspace: 0pt;mso-table-rspace: 0pt;}
        img {-ms-interpolation-mode: bicubic;}
    </style>
    <![endif]-->
    <style type="text/css">
        body, p, div {
            font-family: inherit;
            font-size: 14px;
        }
        body {
            color: #000000;
        }
        body a {
            color: #1188E6;
            text-decoration: none;
        }
        p { margin: 0; padding: 0; }
        table.wrapper {
            width:100% !important;
            table-layout: fixed;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        img.max-width {
            max-width: 100% !important;
        }
        .column.of-2 {
            width: 50%;
        }
        .column.of-3 {
            width: 33.333%;
        }
        .column.of-4 {
            width: 25%;
        }
        @media screen and (max-width:480px) {
            .preheader .rightColumnContent,
            .footer .rightColumnContent {
                text-align: left !important;
            }
            .preheader .rightColumnContent div,
            .preheader .rightColumnContent span,
            .footer .rightColumnContent div,
            .footer .rightColumnContent span {
                text-align: left !important;
            }
            .preheader .rightColumnContent,
            .preheader .leftColumnContent {
                font-size: 80% !important;
                padding: 5px 0;
            }
            table.wrapper-mobile {
                width: 100% !important;
                table-layout: fixed;
            }
            img.max-width {
                height: auto !important;
                max-width: 100% !important;
            }
            a.bulletproof-button {
                display: block !important;
                width: auto !important;
                font-size: 80%;
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
            .columns {
                width: 100% !important;
            }
            .column {
                display: block !important;
                width: 100% !important;
                padding-left: 0 !important;
                padding-right: 0 !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
            }
        }
    </style>
    <!--user entered Head Start--><link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet"><style>
        body {font-family: 'Muli', sans-serif;}
    </style><!--End Head user entered-->
</head>
<body>
<?php
session_start();
$betreff = $_SESSION["Betreff"];
$nachricht = $_SESSION["Nachricht"];
$name = $_SESSION["Name"];
$email = $_SESSION["Email"];

include 'includes/PHPMailer.php';
include 'includes/Exception.php';
include 'includes/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


date_default_timezone_set("Europe/Berlin");
$timestamp = time();
$datum = date("d.m.Y",$timestamp);
$uhrzeit = date("H:i",$timestamp);

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";
    $mail->Username = "btiwatches.noreply@gmail.com";
    $mail->Password = "BT!w@tches2020";
    $mail->Subject = $betreff;
    $mail->setFrom("btiwatches.noreply@gmail.com", "BTI Watches Mail System");
    $mail->isHTML(true);

    $mail->Body = "<center class=\"wrapper\" data-link-color=\"#1188E6\" data-body-style=\"font-size:14px; font-family:inherit; color:#000000; background-color:#FFFFFF;\">
    <div class=\"webkit\">
          <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\" class=\"wrapper\" bgcolor=\"#FFFFFF\">
            <tbody><tr>
              <td valign=\"top\" bgcolor=\"#FFFFFF\" width=\"100%\">
                <table width=\"100%\" role=\"content-container\" class=\"outer\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                  <tbody><tr>
                    <td width=\"100%\">
                      <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                        <tbody><tr>
                          <td>
                            <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"width:100%; max-width:600px;\" align=\"center\">
                              <tbody><tr>
                                <td role=\"modules-container\" style=\"padding:0px 0px 0px 0px; color:#000000; text-align:left;\" bgcolor=\"#FFFFFF\" width=\"100%\" align=\"left\"><table class=\"module preheader preheader-hide\" role=\"module\" data-type=\"preheader\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"display: none !important; mso-hide: all; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;\">
    <tbody><tr>
      <td role=\"module-content\">
        <p></p>
      </td>
    </tr>
  </tbody></table><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" role=\"module\" data-type=\"columns\" style=\"padding:30px 20px 30px 20px;\" bgcolor=\"#f6f6f6\">
    <tbody>
      <tr role=\"module-content\">
        <td height=\"100%\" valign=\"top\">
          <table class=\"column\" width=\"540\" style=\"width:540px; border-spacing:0; border-collapse:collapse; margin:0px 10px 0px 10px;\" cellpadding=\"0\" cellspacing=\"0\" align=\"left\" border=\"0\" bgcolor=\"\">
            <tbody>
              <tr>
                <td style=\"padding:0px;margin:0px;border-spacing:0;\"><table class=\"wrapper\" role=\"module\" data-type=\"image\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"table-layout: fixed;\" data-muid=\"72aac1ba-9036-4a77-b9d5-9a60d9b05cba\">
    <tbody>
      <tr>
        <td style=\"font-size:6px; line-height:10px; padding:0px 0px 0px 0px;\" valign=\"top\" align=\"center\">
          <img class=\"max-width\"border=\"0\" style=\"display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px;\" width=\"65\" alt=\"\" data-proportionally-constrained=\"true\" data-responsive=\"false\" src=\"https://i.ibb.co/KX15CtZ/img-logo.png\" height=\"50\">
        </td>
      </tr>
    </tbody>
  </table><table class=\"module\" role=\"module\" data-type=\"spacer\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"table-layout: fixed;\" data-muid=\"331cde94-eb45-45dc-8852-b7dbeb9101d7\">
    <tbody>
      <tr>
        <td style=\"padding:0px 0px 20px 0px;\" role=\"module-content\" bgcolor=\"\">
        </td>
      </tr>
    </tbody>
  </table><table class=\"wrapper\" role=\"module\" data-type=\"image\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"table-layout: fixed;\" data-muid=\"d8508015-a2cb-488c-9877-d46adf313282\">
    <tbody>
      <tr>
        <td style=\"font-size:6px; line-height:10px; padding:0px 0px 0px 0px;\" valign=\"top\" align=\"center\">
          <img class=\"max-width\" border=\"0\" style=\"display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px;\" width=\"80 alt=\"\" data-proportionally-constrained=\"true\" data-responsive=\"false\" src=\"https://i.ibb.co/NmV9tZZ/logo.png\" height=\"10\">
        </td>
      </tr>
    </tbody>
  </table><table class=\"module\" role=\"module\" data-type=\"spacer\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"table-layout: fixed;\" data-muid=\"27716fe9-ee64-4a64-94f9-a4f28bc172a0\">
    <tbody>
      <tr>
        <td style=\"padding:0px 0px 30px 0px;\" role=\"module-content\" bgcolor=\"\">
        </td>
      </tr>
    </tbody>
  </table><table class=\"module\" role=\"module\" data-type=\"text\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"table-layout: fixed;\" data-muid=\"948e3f3f-5214-4721-a90e-625a47b1c957\" data-mc-module-version=\"2019-10-22\">
    <tbody>
      <tr>
        <td style=\"padding:50px 30px 18px 30px; line-height:36px; text-align:inherit; background-color:#ffffff;\" height=\"100%\" valign=\"top\" bgcolor=\"#ffffff\" role=\"module-content\"><div><div style=\"font-family: inherit; text-align: center\"><span style=\"font-size: 43px\">Ihre E-Mail wurde erfolgreich versendet!&nbsp;</span></div><div></div></div></td>
      </tr>
    </tbody>
  </table><table class=\"module\" role=\"module\" data-type=\"text\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"table-layout: fixed;\" data-muid=\"a10dcb57-ad22-4f4d-b765-1d427dfddb4e\" data-mc-module-version=\"2019-10-22\">
    <tbody>
      <tr>
        <td style=\"padding:18px 30px 18px 30px; line-height:22px; text-align:inherit; background-color:#ffffff;\" height=\"100%\" valign=\"top\" bgcolor=\"#ffffff\" role=\"module-content\"><div><div style=\"font-family: inherit; text-align: center\"><span style=\"font-size: 18px\"></span><span style=\"color: #000000; font-size: 18px; font-family: arial,helvetica,sans-serif\"> </span><span style=\"font-size: 18px\"></span></div>
<div style=\"font-family: inherit; text-align: center\"><span style=\"color: #ffbe00; font-size: 18px\"><strong>BTI Watches&nbsp;</strong></span></div><div></div></div></td>
      </tr>
    </tbody>
  </table><table class=\"module\" role=\"module\" data-type=\"spacer\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"table-layout: fixed;\" data-muid=\"7770fdab-634a-4f62-a277-1c66b2646d8d\">
    <tbody>
      <tr>
        <td style=\"padding:0px 0px 20px 0px;\" role=\"module-content\" bgcolor=\"#ffffff\">
        </td>
      </tr>
    </tbody>
  </table><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"module\" data-role=\"module-button\" data-type=\"button\" role=\"module\" style=\"table-layout:fixed;\" width=\"100%\" data-muid=\"d050540f-4672-4f31-80d9-b395dc08abe1\">
      <tbody>
        <tr>
          <td align=\"center\" bgcolor=\"#ffffff\" class=\"outer-td\" style=\"padding:0px 0px 0px 0px;\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"wrapper-mobile\" style=\"text-align:center;\">
              <tbody>
                <tr>
                <td align=\"center\" bgcolor=\"#ffbe00\" class=\"inner-td\" style=\"border-radius:6px; font-size:16px; text-align:center; background-color:inherit;\">

                </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table><table class=\"module\" role=\"module\" data-type=\"spacer\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"table-layout: fixed;\" data-muid=\"7770fdab-634a-4f62-a277-1c66b2646d8d.1\">
    <tbody>
      <tr>
        <td style=\"padding:0px 0px 50px 0px;\" role=\"module-content\" bgcolor=\"#ffffff\">
        </td>
      </tr>
    </tbody>
  </table><table class=\"module\" role=\"module\" data-type=\"text\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"table-layout: fixed;\" data-muid=\"a265ebb9-ab9c-43e8-9009-54d6151b1600\" data-mc-module-version=\"2019-10-22\">
    <tbody>
      <tr>
        <td style=\"padding:50px 30px 50px 30px; line-height:22px; text-align:inherit; background-color:#6e6e6e;\" height=\"100%\" valign=\"top\" bgcolor=\"#6e6e6e\" role=\"module-content\"><div><div style=\"font-family: inherit; text-align: center\"><span style=\"color: #ffffff; font-size: 18px\"><strong>Der Inhalt Ihrer E-Mail:</strong></span></div>
<div style=\"font-family: inherit; text-align: center\"><br></div>
<div style=\"font-family: inherit; text-align: center\"><span style=\"color: #ffffff; font-size: 18px\">$nachricht</span></div><div></div></div></td>
      </tr>
    </tbody>
  </table><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"module\" data-role=\"module-button\" data-type=\"button\" role=\"module\" style=\"table-layout:fixed;\" width=\"100%\" data-muid=\"d050540f-4672-4f31-80d9-b395dc08abe1.1\">
      <tbody>
        <tr>
          <td align=\"center\" bgcolor=\"#6e6e6e\" class=\"outer-td\" style=\"padding:0px 0px 0px 0px;\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"wrapper-mobile\" style=\"text-align:center;\">
              <tbody>
                <tr>
                <td align=\"center\" bgcolor=\"#ffbe00\" class=\"inner-td\" style=\"border-radius:6px; font-size:16px; text-align:center; background-color:inherit;\">

                </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table><table class=\"module\" role=\"module\" data-type=\"spacer\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"table-layout: fixed;\" data-muid=\"c37cc5b7-79f4-4ac8-b825-9645974c984e\">
    <tbody>
      <tr>
        <td style=\"padding:0px 0px 30px 0px;\" role=\"module-content\" bgcolor=\"6E6E6E\">
        </td>
      </tr>
    </tbody>
  </table></td>
              </tr>
            </tbody>
          </table>
          
        </td>
      </tr>
    </tbody>
  </table><div data-role=\"module-unsubscribe\" class=\"module\" role=\"module\" data-type=\"unsubscribe\" style=\"color:#444444; font-size:12px; line-height:20px; padding:16px 16px 16px 16px; text-align:Center;\" data-muid=\"4e838cf3-9892-4a6d-94d6-170e474d21e5\">
                                            <div class=\"Unsubscribe--addressLine\"><p class=\"Unsubscribe--senderName\" style=\"font-size:12px; line-height:20px;\">BTI Watches</p><p style=\"font-size:12px; line-height:20px;\"><span class=\"Unsubscribe--senderAddress\"></span><span class=\"Unsubscribe--senderCity\">Neuss</span>, <span class=\"Unsubscribe--senderState\">41460,</span> <span class=\"Unsubscribe--senderZip\">Germany</span></p></div>
                                          </div><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"module\" data-role=\"module-button\" data-type=\"button\" role=\"module\" style=\"table-layout:fixed;\" width=\"100%\" data-muid=\"550f60a9-c478-496c-b705-077cf7b1ba9a\">
      <tbody>
        <tr>
          <td align=\"center\" bgcolor=\"\" class=\"outer-td\" style=\"padding:0px 0px 20px 0px;\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"wrapper-mobile\" style=\"text-align:center;\">
              <tbody>
                <tr>

                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table></td>
                                      </tr>
                                    </tbody></table>
                                    <!--[if mso]>
                                  </td>
                                </tr>
                              </table>
                            </center>
                            <![endif]-->
                          </td>
                        </tr>
                      </tbody></table>
                    </td>
                  </tr>
                </tbody></table>
              </td>
            </tr>
          </tbody></table>
        </div>
      </center>";

    $mail->addAddress($email);

    if ($mail->Send()) {
        echo "<p style=\"color: green; text-align: center; \">Email wurde versendet</p>";
        $mail->ClearAddresses();
        $mail->Subject = $betreff;
        $mail->Body = "<h1>Sie haben eine Neue Mail von $name bekommen</h1>
                                <h3>In der Mail geht es sich um: $betreff</h3>
                                <p>$nachricht</p><br>
                                Melden sie sich bei: $email
                                <p style=\"font-size: smaller\">Diese Mail wurde am $datum um $uhrzeit vom <b>BTI Watches Mail System</b> verschickt</p>";

        $mail->addAddress("Dennis.vandenbrock@btiwatches.de");
        $mail->addAddress("dennisvandenbrock54@gmail.com");

        if ($mail->Send()) {
            echo "<p style=\"color: green; text-align: center; \">Verifications Email wurde versendet</p>";
            header('location: ../../../index.php');
        } else {
            echo "<p style=\"color: red; text-align: center; \">Fehler beim versenden der Verifications E-Mail</p>";
        }
    } else {
        echo "<p style=\"color: red; text-align: center; \">Fehler beim versenden der E-Mail.<br>Fehler: $mail->ErrorInfo;</p>";
    }

?>