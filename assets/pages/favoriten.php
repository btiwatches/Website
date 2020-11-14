<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/Logo/white_small_logo.png">
    <link rel="stylesheet" href="css/Warenkorb/style.css">
    <title>Favoriten</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/924baf914c.js" crossorigin="anonymous"></script>
    <script src="js/master.js"></script>
</head>
<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    $benutzername = $_SESSION["Benutzername"];

    if(isset($_GET["Ausloggen"])) {
        Ausloggen();
        CleanDatabase();
    }
    function Ausloggen() {
        session_unset();
        header("Location:favoriten.php");
    }

    if(isset($_GET["DeleteFromCart"])) {
        DeleteFromCart();
        CleanDatabase();
        header("Location:favoriten.php");
    }

    function DeleteFromCart() {
        $benutzername = $_SESSION["Benutzername"];
        $id_uhren = $_GET["DeleteFromCart"];
        $db_link = mysqli_connect("localhost", "root", "", "btiwatches.de");

        mysqli_set_charset($db_link, "utf8");

        $sql_anweisung = "SELECT *
                            FROM tbl_uhren as uh,
                                tbl_user as u,
                                tbl_kauf as k,
                                tbl_favorits as f
                        WHERE uh.id_uhren = '$id_uhren'
                            AND u.benutzername = '$benutzername'
                            AND uh.id_uhren = f.uhren_id
                            AND f.id_favorits = k.favorits_id
                            AND k.user_id = u.id_user";
        
        $ergebnismenge = mysqli_query($db_link, $sql_anweisung);
            
        while($datenzeile = mysqli_fetch_assoc($ergebnismenge)) {

            $favoriten_id = $datenzeile["id_favorits"];
            $delete_anweisung = "DELETE FROM `tbl_favorits` WHERE `tbl_favorits`.`uhren_id` = '$id_uhren'";

            mysqli_query($db_link, $delete_anweisung);

            $delete_anweisung2 = "DELETE FROM `tbl_kauf` WHERE `tbl_kauf`.`favorits_id` = '$favoriten_id'";
            mysqli_query($db_link, $delete_anweisung2);
        }
    }

    function CleanDatabase() {
        $db_link = mysqli_connect("localhost", "root", "", "btiwatches.de");

        mysqli_set_charset($db_link, "utf8");
        $sql_anweisung = "SELECT * 
                            FROM tbl_favorits AS f RIGHT OUTER JOIN tbl_kauf AS k 
                                    ON f.id_favorits = k.favorits_id 
                            WHERE f.id_favorits is NULL";

        $ergebnismenge = mysqli_query($db_link, $sql_anweisung);

        while($datenzeile = mysqli_fetch_assoc($ergebnismenge)) {
            $favorits_id = $datenzeile["favorits_id"];
            $delete_anweisung = "DELETE FROM `tbl_favorits` WHERE `tbl_kauf`.`favorits_id` = '$favorits_id'";

            mysqli_query($db_link, $delete_anweisung);
        }
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
                            ?> <a href="favoriten.php?Ausloggen=true" style="color: white; text-decoration: none;"><div style="color: white; font-size: 14px; margin: 0; height: 65px; padding: 23px; text-align:center;">Ausloggen</div></a> <?php
                        }
                        else {
                            ?>  <a href="Login.php" style="color: white; text-decoration: none;"><div style="color: white; font-size: 14px; margin: 0; height: 65px; padding: 23px; text-align:center; border-bottom: 1px solid white;" class="dropdown-p">Anmelden</div></a> <?php
                            ?>  <a href="Register.php" style="color: white; text-decoration: none;"><div style="color: white; font-size: 14px; margin: 0; height: 65px; padding: 23px; text-align:center;" class="dropdown-p">Registrieren</div></a> <?php
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
<div class="wrap cf">
    <div class="heading cf">
        <h1>Ihre Favoriten</h1>
    </div>
    <div class="cart">
<?php
    $benutzer = $_SESSION["Benutzername"];
    if (isset($benutzer)) {
        $db_link = mysqli_connect("localhost", "root", "", "btiwatches.de");

        mysqli_set_charset($db_link, "utf8");

        $sql_anweisung = "SELECT *
                        FROM tbl_user
                        WHERE Benutzername = '$benutzer'";

        $ergebnismenge = mysqli_query($db_link, $sql_anweisung);

        if($datenzeile = mysqli_fetch_assoc($ergebnismenge))
        {
            $id_user = $datenzeile["id_user"];
            $sql_anweisung2 ="SELECT  DISTINCT(uh.id_uhren), uh.bezeichnunguhren, h.bezeichnunghersteller, uh.bildname, g.bezeichnunggehaeuse, COUNT(f.uhren_id)
                                    FROM  tbl_user AS u,
                                            tbl_hersteller AS h,
                                            tbl_uhren AS uh,
                                            tbl_favorits AS f,
                                            tbl_kauf AS k,
                                            tbl_technische_details AS td,
                                            tbl_gehaeuse AS g
                                    WHERE  k.user_id = u.id_user
                                    AND  k.favorits_id = f.id_favorits
                                    AND  f.uhren_id = uh.id_uhren
                                    AND  uh.hersteller_id = h.id_hersteller
                                    AND  uh.technische_details_id = td.id_technische_details
                                    AND  td.gehaeuse_id = g.id_gehaeuse
                                    AND  u.id_user = '$id_user'
                                    GROUP BY f.uhren_id";


            $ergebnismenge2 = mysqli_query($db_link, $sql_anweisung2);
            $rows = $ergebnismenge2->num_rows;
            $i = 0;
            if($rows > 0)
            {
                while($datenzeile = mysqli_fetch_assoc($ergebnismenge2)) {
                    $id_uhren = $datenzeile["id_uhren"];
                    $uhrenname = $datenzeile["bezeichnunguhren"];
                    $hersteller = $datenzeile["bezeichnunghersteller"];
                    $bildname = $datenzeile["bildname"];
                    $infos = $datenzeile["bezeichnunggehaeuse"];
                    $menge = $datenzeile["COUNT(f.uhren_id)"];

                    if($i == 0) {
                        echo "        <ul class=\"cartWrap\">";
                        echo "        <li class=\"items odd\">";
                        echo "        <div class=\"infoWrap\"> ";
                        echo "            <div class=\"cartSection\">";
                        echo "                <img src=\"../../images/$hersteller/$bildname\" class=\"itemImg\" alt=\"$uhrenname\"/>";
                        echo "                <p class=\"itemNumber\" style=\"text-transform: uppercase;\">#$hersteller$id_uhren</p>";
                        echo "                <h3>$uhrenname<div style=\"font-size: 10px\">x $menge</div></h3>";
                        echo "                <p class=\"qty\" style=\"margin-top: 10px\">$infos</p>";
                        echo "            </div>";
                        echo "            <div class=\"prodTotal cartSection\">";
                        echo "                <p>";
                        echo "                    <a href=\"products.php?id_uhren=$id_uhren\" class=\"btn-prodInfo\">";
                        echo "                        Weitere Infos";
                        echo "                    </a>";
                        echo "                </p>";
                        echo "            </div>";
                        echo "            <div class=\"cartSection removeWrap\">";
                        echo "                <a href=\"favoriten.php?DeleteFromCart=$id_uhren\" class=\"remove\">x</a>";
                        echo "            </div>";
                        echo "        </div>";
                        echo "    </li>";
                        echo "   </ul>";

                        $i = 1;
                    } else {
                        echo "        <ul class=\"cartWrap\">";
                        echo "        <li class=\"items even\">";
                        echo "        <div class=\"infoWrap\"> ";
                        echo "            <div class=\"cartSection\">";
                        echo "                <img src=\"../../images/$hersteller/$bildname\" class=\"itemImg\" alt=\"$uhrenname\"/>";
                        echo "                <p class=\"itemNumber\" style=\"text-transform: uppercase;\">#$hersteller$id_uhren</p>";
                        echo "                <h3>$uhrenname<div style=\"font-size: 10px\">x $menge</div></h3>";
                        echo "                <p class=\"qty\" style=\"margin-top: 10px\">$infos</p>";
                        echo "            </div>";
                        echo "            <div class=\"prodTotal cartSection\">";
                        echo "                <p>";
                        echo "                    <a href=\"products.php?id_uhren=$id_uhren\" class=\"btn-prodInfo\">";
                        echo "                        Weitere Infos";
                        echo "                    </a>";
                        echo "                </p>";
                        echo "            </div>";
                        echo "            <div class=\"cartSection removeWrap\" style=\"width: 23.2px;\">";
                        echo "                <a href=\"favoriten.php?DeleteFromCart=$id_uhren\" class=\"remove\">x</a>";
                        echo "            </div>";
                        echo "        </div>";
                        echo "    </li>";
                        echo "   </ul>";

                        $i = 0;
                    }

                }
            }
            else {
                echo "Sie haben keine Uhren in ihrer Favoritenliste.";
            }
        }
    }
    else {
        echo "Um die Favoritenliste zu benutzten, müssen sie angemeldet sein.";
    }

?>
    </div>
</div>
</body>
</html>
