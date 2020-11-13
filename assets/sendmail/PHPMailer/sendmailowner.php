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
$mail = new PHPMailer();


$mail->Subject = $betreff;
$mail->Body = "<h1>Sie haben eine Neue Mail von $name bekommen</h1>
                                <h3>In der Mail geht es sich um: $betreff</h3>
                                <p>$nachricht</p><br>
                                Melden sie sich bei: $email
                                <p style=\"font-size: smaller\">Diese Mail wurde am $datum um $uhrzeit vom <b>BTI Watches Mail System</b> verschickt</p>";

$mail->addAddress("btiwatches.noreply@gmail.com");

if ($mail->Send()) {
    echo "<p style=\"color: green; text-align: center; \">Verifications Email wurde versendet</p>";
} else {
    echo "<p style=\"color: red; text-align: center; \">Fehler beim versenden der Verifications E-Mail</p>";
}
$mail->smtpClose();