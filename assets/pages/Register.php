<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/Register/Register.css">

    <script src="https://kit.fontawesome.com/924baf914c.js" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/Logo/white_small_logo.png">
    <title>Registrieren</title>
  </head>
  <body>
    <?php
      session_start();
      session_unset();
      error_reporting(E_ERROR | E_PARSE);


      $random = rand(1, 4);

      if($random == 1) {
        $random = "Background.jpg";
      } else if($random == 2) {
        $random = "Background2.jpg";
      } else if($random == 3) {
        $random = "Background3.jpg";
      } else if($random == 4) {
        $random = "Background4.jpg";
      }


      echo "<img src=\"images/Login/$random\" alt=\"\" style =\"height: 105%; width: 105%; left:-15px; top:-15px; filter: blur(3px);\">";
      ?>
    <div class="Inhalt">
      <div class="AnemeldeBox">
        <div class="grad-bar"></div>
        <div class="login">
        <img src="images/Logo/white_small_logo.png" alt="Logo">

          <div class="login__form">

            <form class="" method="post">
              <div class="login__rowNames" style="margin-left: 12.5vw; float:left; margin-top: -5rem;">
                  <input type="text" class="login__inputNames name" name="Vorname" placeholder="Vorname"/>
              </div>

              <div class="login__rowNames" style="margin-right: 12.5vw; float:right; margin-top: -5rem;">
                  <input type="text" class="login__inputNames name" name="Nachname" placeholder="Nachname"/>
              </div>

              <div class="login__row">
                <select class="login__inputGender name" placeholder="Geschlecht" name="Geschlecht">
                  <option>Männlich</option>
                  <option>Weiblich</option>
                </select>
              </div>

              <div class="login__row">
                <i class="fas fa-at"  style="margin-right:2.75px;"></i>
                <input type="text" class="login__input name" name="mail" placeholder="E-Mail"/>
              </div>

              <div class="login__row" style="">
                <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                  <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                </svg>
                <input type="text" class="login__input name" name="Benutzername" placeholder="Benutzername"/>
              </div>

              <div class="login__row">
                <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                  <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                </svg>
                <input type="password" class="login__input pass" name="Passwort1" placeholder="Passwort"/>
              </div>

              <div class="login__row">
                <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                  <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                </svg>
                <input type="password" class="login__input pass" name="Passwort2" placeholder="Passwort Wiederholen"/>
              </div>

              <a href="../../index.php"><button type="button" class="login__submit">Abbruch</button></a>
              <button class="login__submit">Regestrieren</button>
            <p class="login__signup">Sie haben bereits einen Account?   <a href="Login.php">Melden sie sich an!</a></p>
            </form>
            <?php
              $mailadressen = array("gmail.com"," t-online.de", "gmx.de", "outlook.com", "googlemail.de", "aol.com", "webs.de", "msn.de", "outlook.de", "msn.com", "icloud.com", "btiwatches.de");

              $datenbankverbindung = mysqli_connect("localhost", "root", "", "btiwatches.de");

              if (mysqli_connect_errno($datenbankverbindung))
              {
                echo "Anmeldung fehlgeschlagen: " . mysqli_connect_error();
                exit(0);
              }

              mysqli_set_charset($datenbankverbindung, "utf8");


              $Vorname = $_POST["Vorname"];
              $Nachname 	= $_POST["Nachname"];
              $mail 	= $_POST["mail"];
              $Benutzername 	= $_POST["Benutzername"];
              $Passwort1  = $_POST["Passwort1"];
              $Passwort2  = $_POST["Passwort2"];
              $geschlecht  = $_POST["Geschlecht"];

              $tmp = explode("@", $mail);

              $sql_anfrage = "SELECT  *
                                FROM  tbl_user
                               WHERE  benutzername = '".$Benutzername."'";

              $ergebnismenge = mysqli_query($datenbankverbindung, $sql_anfrage);

              if($datensatz = mysqli_fetch_assoc($ergebnismenge))
              {
                  echo "<p><div class=\"Loginwrong\">Der Benutzername ist schon vergeben!</div> <br /> \n";
              }
              else
              {
                $sql_anfrage = "SELECT  *
                                  FROM  tbl_user
                                 WHERE  email = '".$mail."'";

                 $ergebnismenge = mysqli_query($datenbankverbindung, $sql_anfrage);

                 if($datensatz = mysqli_fetch_assoc($ergebnismenge))
                 {
                   echo "<p><div class=\"Loginwrong\">Die E-Mail Adresse ist schon vergeben!</div> <br /> \n";
                 }
                 else
                 {
                   if ($Passwort1 != $Passwort2) {
                     echo "<p><div class=\"Loginwrong\">Die Passwörter sind nicht identisch!</div> <br /> \n";
                   }
                   else {
                     if (!(in_array($tmp[1], $mailadressen))) {
                        echo "<p><div class=\"Loginwrong\">Bitte geben sie eine gültige E-Mail an!</div> <br /> \n";
                      }
                      else {
                        if ((empty($Vorname)) || (empty($Nachname)) || (empty($mail)) || (empty($Benutzername)) || (empty($geschlecht))) {
                          echo "<p><div class=\"Loginwrong\">Bitte füllen sie alle Felder aus!</div> <br /> \n";
                        }
                        else {
                          $sql_zahlziehen = "SELECT MAX(id_user) FROM tbl_user";

                          $ergebnismenge3 = mysqli_query($datenbankverbindung, $sql_zahlziehen);
                          while($datenzeile = mysqli_fetch_assoc($ergebnismenge3)) {
                            $id_user=$datenzeile["MAX(id_user)"];
                            $id_user +=1;
                            $insert_anweisung = "INSERT INTO `tbl_user` (`id_user`, `benutzername`, `vorname`, `nachname`, `email`, `passwort`, `beigetreten_am`, `geschlecht`)
                                                  VALUES ('$id_user', '$Benutzername', '$Vorname', '$Nachname', '$mail', '$Passwort1', CURRENT_DATE(), '$geschlecht')";

                            mysqli_query($datenbankverbindung, $insert_anweisung);

                            echo mysqli_error($datenbankverbindung);

                            $_SESSION['Benutzername'] = $Benutzername;
                            header("Location:../../index.php");
                          }
                        }
                      }
                     }
                   }
                 }
               ?>
          </div>
        </div>
  </body>
</html>
