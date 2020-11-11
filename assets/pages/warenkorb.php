<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/Logo/white_small_logo.png">
    <link rel="stylesheet" href="css/Warenkorb/style.css">
    <title>Warenkorb</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/924baf914c.js" crossorigin="anonymous"></script>
    <script src="js/master.js"></script>
</head>
<?php
    session_start();

    if(isset($_GET["Ausloggen"])) {
        Ausloggen();
    }
    function Ausloggen() {
        session_unset();
        header("Location:warenkorb.php");
    }


?>
<header>
    <div class="nav">
        <input type="checkbox" id="nav-check">
            <div class="nav-header">
                <div class="nav-title">
                    <img src="../../images/Logo/white_logo.png" alt="Logo">
                </div>
            </div>
        <div class="nav-btn">
            <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
            </label>
        </div>
        
        <div class="nav-links">
            <?php 
                if(isset($_SESSION["Benutzername"])) {
                    echo "<div onclick=\"dropdown()\" style=\"cursor: pointer;\">". $_SESSION["Benutzername"] ."<i class=\"fas fa-caret-down\" style=\"font-size: 15px; margin-left: 4px;\"></i></div>";
                }
                else {
                    echo "<div onclick=\"dropdown()\" style=\"cursor: pointer;\"> Anmelden <i class=\"fas fa-caret-down\" style=\"font-size: 15px; margin-left: 4px;\"></i></div>";
                }
                
            ?>
            <div class="dropdown">
                <div class="dropdown-content">
                    <?php
                        if(isset($_SESSION["Benutzername"])) {
                            ?> <a href="warenkorb.php?Ausloggen=true" style="color: white; text-decoration: none;"><div style="color: white; font-size: 14px; margin: 0; height: 65px; padding: 23px; text-align:center;">Ausloggen</div></a> <?php
                        }
                        else {
                            ?>  <a href="login.php" style="color: white; text-decoration: none;"><div style="color: white; font-size: 14px; margin: 0; height: 65px; padding: 23px; text-align:center; border-bottom: 1px solid white;" class="dropdown-p">Anmelden</div></a> <?php
                            ?>  <a href="register.php" style="color: white; text-decoration: none;"><div style="color: white; font-size: 14px; margin: 0; height: 65px; padding: 23px; text-align:center;" class="dropdown-p">Registrieren</div></a> <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    <div class="location">
        <div class="locationschrift">
            <a href="../../index.php" class="locationlink">Home</a> / Warenkorb
        </div>
    </div>
</header>
<body>
</body>
</html>