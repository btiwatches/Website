<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/Login/Login.css">
    <script src="https://kit.fontawesome.com/924baf914c.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/Logo/white_small_logo.png">
    <title>Anmelden</title>
  </head>
  <body>
  <?php
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
    echo "<img src=\"images/Login/$random\" alt=\"\" style =\"height: 110%; width: 110%; left:-15px; top:-15px; filter: blur(8px);\">";
    ?>
    <div class="Inhalt">
      <div class="AnemeldeBox">
        <div class="grad-bar"></div>
        <div class="login">
          <img src="images/Logo/white_small_logo.png" alt="Logo">
          <div class="login__form">

            <form class="" action="Login.php" method="post">
              <div class="login__row">

              <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
              </svg>

              <input type="text" class="login__input name" name="Benutzername" placeholder="Benutzername"/>
            </div>

            <div class="login__row">

              <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
              </svg>

              <input type="password" class="login__input pass" name="Passwort" placeholder="Passwort"/>
            </div>


            <a href="../../index.php"><button type="button" class="login__submit">Abbruch</button></a>
            <button type="submit" class="login__submit">Anmelden</button>
            <p class="login__signup">Sie haben keinen Account?   <a href="Register.php">Regestrieren sie sich!</a></p>


            </form>
            <?php
              $datenbankverbindung = mysqli_connect("localhost", "root", "", "btiwatches.de");

              if (mysqli_connect_errno($datenbankverbindung)) {
                echo "Anmeldung fehlgeschlagen: " . mysqli_connect_error();
                exit(0);
              }
              mysqli_set_charset($datenbankverbindung, "utf8");

              $benutzername = $_POST['Benutzername'];
              $passwort 	= $_POST['Passwort'];
              $sql_anfrage = "SELECT  *
                                FROM  tbl_user
                               WHERE  benutzername = '$benutzername'
                                 AND  passwort = '$passwort'";

              $ergebnismenge = mysqli_query($datenbankverbindung, $sql_anfrage);

              if($datensatz = mysqli_fetch_assoc($ergebnismenge))
              {
                session_start();

                $_SESSION['Benutzername'] = $benutzername;
                header("Location:../../index.php");
              }
              else
              {
                echo "<div class=\"Loginwrong\">Der Benutzername oder das Passwort ist falsch!</div>";
              }
            ?>
          </div>
        </div>
  </body>
</html>
