
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/Products/products.css">
    <link rel="shortcut icon" href="../../images/Logo/white_small_logo.png" />
    <link rel="stylesheet" href="../css/footer.css">

    <script src="https://kit.fontawesome.com/924baf914c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/master.js"></script>
    <?php
    if (isset($_GET["AddToCart"])) {
        $id_uhren = $_GET["AddToCart"];
    }
    else {
        $id_uhren = $_GET["id_uhren"];
    }

    $db_link = mysqli_connect("localhost", "root", "", "btiwatches.de");

    mysqli_set_charset($db_link, "utf8");

    $sql_anweisung = "  SELECT  *
                        FROM    tbl_uhren AS u
                        WHERE   u.id_uhren = '$id_uhren'";


    $ergebnismenge = mysqli_query($db_link, $sql_anweisung);
    
    if($datenzeile = mysqli_fetch_assoc($ergebnismenge))
    {
        $uhrenname=$datenzeile["bezeichnunguhren"];

        echo "<title>$uhrenname</title>";
    }
    else {
        echo "<title>Uhr nicht gefunden!</title>";
    }
?>
</head>
<body>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    $msg = "";
        session_start();


        if(isset($_GET["Ausloggen"])) {
            Ausloggen();
        }
        function Ausloggen() {
            session_unset();
            header("Location:register.php");
        }



        if(isset($_GET["AddToCart"])) {
            if (isset($_GET["AddToCart"])) {
                $id_uhren = $_GET["AddToCart"];
            }
            AddToCart($id_uhren);
        }
        function AddToCart($id_uhren) {
            $benutzer = $_SESSION["Benutzername"];
            if (!empty($benutzer)) {
                $db_link = mysqli_connect("localhost", "root", "", "btiwatches.de");
                mysqli_set_charset($db_link, "utf8");
                $sql_anweisung = "SELECT MAX(id_favorits)
                                    FROM tbl_favorits";
                $ergebnismenge2 = mysqli_query($db_link, $sql_anweisung);

                while($datenzeile = mysqli_fetch_assoc($ergebnismenge2)) {
                    $id_favorits = $datenzeile["MAX(id_favorits)"];
                    $id_favorits +=1;

                    $insert_anweisung = "INSERT INTO `tbl_favorits` (`id_favorits`, `uhren_id`)
                                                        VALUES ('$id_favorits', '$id_uhren')";

                    mysqli_query($db_link, $insert_anweisung);

                    $sql_anweisung3 ="SELECT *
                                        FROM tbl_user
                                       WHERE benutzername = '$benutzer'";
                    $ergebnismenge3 = mysqli_query($db_link, $sql_anweisung3);

                    while($datenzeile = mysqli_fetch_assoc($ergebnismenge3)) {
                        $id_user = $datenzeile["id_user"];

                        $insert_anweisung2 = "INSERT INTO `tbl_kauf` (`user_id`, `favorits_id`, `hinzugefügt_am`)
                                                VALUES ('$id_user', '$id_favorits', CURRENT_DATE())";
                        mysqli_query($db_link, $insert_anweisung2);
                        $msg = "<p style=\"color: green\">Erfolgreich zur Favoritenliste hinzugefügt</p>";
                        header('location:products.php?id_uhren='.$id_uhren.'');
                        return $msg;
                    }
                }
            }
            else {
                $msg = "<p style=\"color: red\">Bitte melden sie sich an!</p>";
                return $msg;
            }
        }
    ?>
<header class="products-header">
    <div class="nav">
        <input type="checkbox" id="nav-check">
            <div class="nav-header">
                <div class="nav-title">
                    <a href="../../index.php">
                        <img src="../../images/Logo/white_small_logo.png" alt="Logo">
                    </a>
                </div>
            <a href="/assets/pages/favoriten.php" style="float: right; margin-top: 15px; margin-right: 20px;">
                <i class="fas fa-heart"></i>
            </a>
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
                            ?> <a href="products.php?Ausloggen=true" style="color: white; text-decoration: none;"><div style="color: white; font-size: 14px; margin: 0; height: 65px; padding: 23px; text-align:center;">Ausloggen</div></a> <?php
                        }
                        else {
                            ?>  <a href="Login.php" style="color: white; text-decoration: none;"><div style="color: white; font-size: 14px; margin: 0; height: 65px; padding: 23px; text-align:center; border-bottom: 1px solid white;" class="dropdown-p">Anmelden</div></a> <?php
                            ?>  <a href="Register.php" style="color: white; text-decoration: none;"><div style="color: white; font-size: 14px; margin: 0; height: 65px; padding: 23px; text-align:center;" class="dropdown-p">Registrieren</div></a> <?php
                        }
                    ?>
                </div>
            </div>
        </div><?php
    $db_link = mysqli_connect("localhost", "root", "", "btiwatches.de");

    mysqli_set_charset($db_link, "utf8");

    $sql_anweisung = "  SELECT  *
                          FROM    tbl_uhren AS u,
                                  tbl_hersteller as h,
                                  tbl_zifferblatt AS z,
                                  tbl_uhrwerk AS uw,
                                  tbl_gehaeuse AS g,
                                  tbl_armband AS a,
                                  tbl_technische_details AS td
                          WHERE   h.id_hersteller = u.hersteller_id
                            AND   u.technische_details_id = td.id_technische_details
                            AND   td.gehaeuse_id = g.id_gehaeuse
                            AND   td.uhrwerk_id = uw.id_uhrwerk
                            AND   td.armband_id = a.id_armband
                            AND   td.zifferblatt_id = z.id_zifferblatt
                            AND   u.id_uhren = '$id_uhren'";


    $ergebnismenge = mysqli_query($db_link, $sql_anweisung);
    
    if($datenzeile = mysqli_fetch_assoc($ergebnismenge))
    {
        /*UHREN INFOS*/
        $id_uhren=$datenzeile["id_uhren"];
        $uhrenname=$datenzeile["bezeichnunguhren"];
        $hersteller=$datenzeile["bezeichnunghersteller"];
        $preis=$datenzeile["preis"];
        $bildname=$datenzeile["bildname"];
        /*GEHÄUSE INFOS*/
        $gehaeusename=$datenzeile["bezeichnunggehaeuse"];
        $gehaeuseaufbau=$datenzeile["aufbau"];
        $gehaeusedruchmesser=$datenzeile["durchmesser"];
        $gehaeusematerial=$datenzeile["materialgehaeuse"];
        $gehaeuseluenette=$datenzeile["luenette"];
        $gehaeuseaufzugskrone=$datenzeile["aufzugskrone"];
        $gehaeuseuhrglas=$datenzeile["uhrglas"];
        $gehaeusewasserdichtheit=$datenzeile["wasserdichtheit"];
        /*UHRWERK INFOS*/
        $uhrwerkbezeichnung=$datenzeile["bezeichnunguhrwerk"];
        $uhrwerkkaliber=$datenzeile["kalieber"];
        $uhrwerkganggenauigkeit=$datenzeile["ganggenauigkeit"];
        $uhrwerkfunktionen=$datenzeile["funktionen"];
        $uhrwerkaufzug=$datenzeile["aufzug"];
        $uhrwerkgangreserve=$datenzeile["gangreserve"];
        /*ARMBAND INFOS*/
        $armbandbezeichnung=$datenzeile["bezeichnungarmband"];
        $armbandmaterial=$datenzeile["materialarmband"];
        $armbandschliesse=$datenzeile["schliesse"];
        /*ZIFFERBLATT INFOS*/
        $zifferblattbezeichnung=$datenzeile["bezeichnungzifferblatt"];
        echo"   <div class=\"location\">";
        echo"       <div class=\"locationschrift\">";
        echo"           <a href=\"../../index.php\" class=\"locationlink\">Home</a> / Uhren / $hersteller / $uhrenname ";
        echo"       </div>";
        echo"   </div>";
        echo"   </header>";
        echo"   <main>";
        echo"    <div class=\"container\">";
        echo"        <div class=\"grid product\">";
        echo"        <div class=\"column-xs-12 column-md-7\">";
        echo"            <div class=\"product-gallery\">";
        echo"            <div class=\"product-image\">";
        echo"                <img src=\"../../images/$hersteller/$bildname\" alt=\"$uhrenname\">";
        echo"            </div>";
        echo"            </div>";
        echo"        </div>";
        echo"        <div class=\"column-xs-12 column-md-5\">";
        echo"            <h1>$uhrenname</h1>";
        echo"            <div class=\"description\">";
        echo"            <p>$preis</p>";
        echo"            <p>$gehaeusename</p>";
        echo"            </div>";
        if (isset($_GET["AddToCart"])) {
            echo AddToCart($id_uhren);
        }
        echo"            <a href=\"products.php?AddToCart=$id_uhren\">
                            <button class=\"add-to-cart\">Zur Favoritenliste hinzufügen</button>
                        </a>";
        echo"        </div>";
        echo"        </div>";
        echo"        <div class=\"grid related-products\">";
        echo"        <div class=\"column-xs-12\">";
        echo"            <h3>Uhren Infos</h3>";
        echo"        </div>";
        echo"        <div class=\"column-xs-12 column-md-3\" style=\"border-right: 1px solid gray\">";
        echo"            <h4>Zifferblatt</h4>";
        echo"            <p class=\"price\"><b>Zifferblatt:</b><div style=\"font-size: 14px\"> $zifferblattbezeichnung</div></p>";
        echo"        </div>";
        echo"        <div class=\"column-xs-12 column-md-3\" style=\"border-right: 1px solid gray\">";
        echo"          <h4>Uhrwerk</h4>";
        echo"            <p class=\"price\"><b>Uhrwerk:</b><div style=\"font-size: 14px\"> $uhrwerkbezeichnung</div></p>";
        echo"            <p class=\"price\"><b>Aufzug:</b><div style=\"font-size: 14px\"> $uhrwerkaufzug</div></p>";
        echo"            <p class=\"price\"><b>Kaliber:</b><div style=\"font-size: 14px\"> $uhrwerkkaliber</div></p>";
        echo"            <p class=\"price\"><b>Funktionen:</b><div style=\"font-size: 14px\"> $uhrwerkfunktionen</div></p>";
        echo"            <p class=\"price\"><b>Gangreserve:</b><div style=\"font-size: 14px\"> $uhrwerkgangreserve</div></p>";
        echo"            <p class=\"price\"><b>Ganggenauigkeit:</b><div style=\"font-size: 14px\"> $uhrwerkganggenauigkeit</div></p>";
        echo"        </div>";
        echo"        <div class=\"column-xs-12 column-md-3\" style=\"border-right: 1px solid gray\">";
        echo"          <h4>Armband</h4>";
        echo"            <p class=\"price\"><b>Armband:</b><div style=\"font-size: 14px\"> $armbandbezeichnung</div></p>";
        echo"            <p class=\"price\"><b>Material:</b><div style=\"font-size: 14px\"> $armbandmaterial</div></p>";
        echo"            <p class=\"price\"><b>Schließe:</b><div style=\"font-size: 14px\"> $armbandschliesse</div></p>";
        echo"        </div>";
        echo"        <div class=\"column-xs-12 column-md-3\">";
        echo"          <h4>Gehäuse</h4>";
        echo"            <p class=\"price\"><b>Gehäuse:</b><div style=\"font-size: 14px\"> $gehaeusename</div></p>";
        echo"            <p class=\"price\"><b>Aufbau:</b><div style=\"font-size: 14px\"> $gehaeuseaufbau</div></p>";
        echo"            <p class=\"price\"><b>Durchmesser:</b><div style=\"font-size: 14px\"> $gehaeusedruchmesser</div></p>";
        echo"            <p class=\"price\"><b>Material:</b><div style=\"font-size: 14px\"> $gehaeusematerial</div></p>";
        echo"            <p class=\"price\"><b>Lünette:</b><div style=\"font-size: 14px\"> $gehaeuseluenette</div></p>";
        echo"            <p class=\"price\"><b>Aufzugskrone:</b><div style=\"font-size: 14px\"> $gehaeuseaufzugskrone</div></p>";
        echo"            <p class=\"price\"><b>Uhrglas:</b><div style=\"font-size: 14px\"> $gehaeuseuhrglas</div></p>";
        echo"            <p class=\"price\"><b>Wasserdichtheit:</b><div style=\"font-size: 14px\"> $gehaeusewasserdichtheit</div></p>";
        echo"        </div>";
        echo"        </div>";
        echo"       </div>";
        echo"    </main>";
    }
    else {
        echo"   <div class=\"location\">";
        echo"       <div class=\"locationschrift\">";
        echo"           <a href=\"../../index.php\" class=\"locationlink\">Home</a> / Uhren / ? / ? ";
        echo"       </div>";
        echo"   </div>";
        echo"   </header>";
        echo"   <main>";
        echo"        <div class=\"column-xs-12 column-md-5\" style=\"text-align: center; width: 42vw; margin-left: 29vw; height: 30vh; margin-top: 25vh;\">";
        echo"            <h1>Keine Uhr in der Datenbank gefunden</h1>";
        echo"            <div class=\"description\">";
        echo"            <p>Bitte gehen sie zurück zur <a href=\"https://btiwatches.de/\">Homepage</a></p>";
        echo"            </div>";
        echo"        </div>";
    }
        ?>
        <footer class="footer-distributed">

            <div class="footer-left">
                <img src="images/Logo/white_small_logo.png" alt="Logo">


                <p class="footer-links">
                    <a href="../../index.php">HOME</a>
                    |
                    <a href="../../index.php#watches">UHREN</a>
                    |
                    <a href="../../index.php#ich">ABOUT US</a>
                    |
                    <a href="../../index.php#contact">KONTAKT</a>

                </p>

                <p class="footer-company-name">BTIWATCHES© </p>
            </div>

            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Hammfelddamm 2, 41460 Neuss</span></p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#contact">BTI Watches</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>Über unsere Firma</span>
                    BTI Watches, ist eine Website auf der sie viele Informationen zu Luxoriösen Uhren finden werden.</p>
                <div class="footer-icons">
                    <a href="https://github.com/btiwatches/btiwatchesWebsite" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://twitter.com/BtiWatches"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/btiwatches/" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </footer>
</body>
</html>