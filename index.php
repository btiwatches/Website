<!DOCTYPE html>
<html lang="de-DE">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BTI WATCHES</title>
      <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/Logo/white_small_logo.png" />
    
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/loadingscreen.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <script src="https://kit.fontawesome.com/924baf914c.js" crossorigin="anonymous"></script>
    <script src="assets/js/anime.min.js"></script>
    <script>
      var height = document.getElementById("header");
      document.onreadystatechange = function () {
        if (document.readyState !== "complete") {
          document.querySelector("#loader").style.visibility = "visible";
          $("body").addClass("stop-scrolling");
        } else {
          setTimeout(function () {
            $("body").removeClass("stop-scrolling");
            $("#seite").fadeIn();
            $("#loader").fadeOut();
          }, 2500);
        }
      };
    </script>

    <style>
        #background-video {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
        }

        #background-video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>

  </head>
  <body>
  <?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    $_SESSION["Page"] = "index.php";

    if(isset($_GET["Ausloggen"])) {
      Ausloggen();
    }
    function Ausloggen() {
      session_unset();
      header("Location:index.php");
      exit;
    }

    if (isset($_GET["mail"])) {
      $name = $_POST["Name"];
      $email = $_POST["email"];
      $betreff = $_POST["betreff"];
      $nachricht = $_POST["nachricht"];
      if (!empty($name) && !empty($email) && !empty($betreff) && !empty($nachricht)) {
          $_SESSION["Name"] = $name;
          $_SESSION["Email"] = $email;
          $_SESSION["Betreff"] = $betreff;
          $_SESSION["Betreff"] = $betreff;
          $_SESSION["Nachricht"] = $nachricht;
          header("Location:assets/sendmail/PHPMailer/sendmail.php");
          exit;
      }
      else {
          $error = "<p style=\"color: red; text-align: center;\">Bitte füllen sie alle Felder aus!</p>";
      }
    }
    ?>
    <section id="seite">
      <div class="stage" id="loader">
        <div id="wrapper">
          <h1 class="LoadingScreen">
            <span id="title">
              <span class="title-letter">B</span>
              <span class="title-letter">T</span>
              <span class="title-letter">I</span>
              <span class="title-letter">&nbsp;</span>
              <span class="title-letter">W</span>
              <span class="title-letter">A</span>
              <span class="title-letter">T</span>
              <span class="title-letter">C</span>
              <span class="title-letter">H</span>
              <span class="title-letter">E</span>
              <span class="title-letter">S</span>
            </span>
            <br />

            <span id="sub-title">Luxury Watches</span>
          </h1>
        </div>
      </div>
      <nav class="nav" id="nav">
        <div class="container">
          <span class="burger">
            <i></i>
            <i></i>
            <i></i>
          </span>
          <div class="logo">
            <a href="#"
              ><img
                src="images/Logo/white_small_logo.png"
                alt="BTI WACTHES"
                class="LogoNav"
            /></a>
          </div>
          <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
              <li class="nodisplayonmobile">
                <a href="assets/pages/favoriten.php"
                  ><i class="fas fa-heart"></i></a>
              </li>
              <div class="dropdown">
                <span>
                  <li class="nodisplayonmobile openlogin">
                    <a href="#"
                      ><i
                        class="fas fa-user"
                        style="margin-right: 10px; font-size: 23px"
                      ></i
                    ></a>
                  </li>

                  <div class="dropdown-content" id="dropdown-content">
                    
                      <?php
                        if(isset($_SESSION["Benutzername"])) {
                          ?> <a style="color: white; text-decoration: none;"><div style="color: white; font-size: 14px; margin: 0; height: 65px;">Angemeldet als: <?php echo "<div style=\"color: lightblue; margin-top: -45px; font-weight: 600;\">". $_SESSION['Benutzername'] . "</div>"?></div></a> <?php
                          ?> <a href="index.php?Ausloggen=true" style="color: white; text-decoration: none;"><div style="color: white; font-size: 14px; margin: 0; height: 65px;">Ausloggen</div></a> <?php
                        }
                        else {
                          ?>  <a href="assets/pages/Login.php" style="color: white; text-decoration: none;"><div style="color: white; font-size: 14px; margin: 0; height: 65px; border-bottom: 1px solid white;" class="dropdown-p">Anmelden</div></a> <?php
                          ?>  <a href="assets/pages/Register.php" style="color: white; text-decoration: none;"><div style="color: white; font-size: 14px; margin: 0; height: 65px;" class="dropdown-p">Registrieren</div></a> <?php
                        }
                        ?>
                  </div>
                </span>
              </div>
              <li class="nodisplayoncomputer">
                <a href="#">Startseite</a>
              </li>
              <li class="nodisplayoncomputer">
                <a href="#watches">Uhren</a>
              </li>
              <li class="nodisplayoncomputer">
                <a href="#ich">Das Team</a>
              </li>
              <li class="nodisplayoncomputer">
                <a href="#contact">Kontakt</a>
              </li>
            </ul>
          </div>

          <div id="mainListDiv2" class="main_list2">
            <ul class="navlinks2" id="navlinks2">
              <li>
                <a href="#" onclick="remove()">Startseite</a>
              </li>
              <li>
                <a href="#watches" onclick="remove()">Uhren</a>
              </li>
              <li>
                <a href="#ich" onclick="remove()">Das Team</a>
              </li>
              <li>
                <a href="#contact" onclick="remove()">Kontakt</a>
              </li>
              <li>
                <a href="http://stockbti.de/" class="StockBti">STOCK<b style="color: red">BTI</b></a>
              </li>
            </ul>
          </div>
          <span class="navTrigger">
            <i></i>
            <i></i>
            <i></i>
          </span>
        </div>
      </nav>

      <section class="home" id="home">
          <div id="background-video">
              <div id="ytplayer" style=""></div>
          </div>
          <script type="text/javascript">
              var tag = document.createElement('script');
              tag.src = "https://www.youtube.com/player_api";
              var firstScriptTag = document.getElementsByTagName('script')[0];
              firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
              var player;

              function onYouTubePlayerAPIReady() {
                  player = new YT.Player('ytplayer', {
                      height: '390',
                      width: '640',
                      videoId: '2Vk8yNS5q9E',
                      playerVars: {
                          autoplay: 1,
                          controls: 0,
                          disablekb: 1,
                          loop: 0,
                          modestbranding: 1,
                          showinfo: 0,
                          autohide: 1,
                          color: 'white',
                          iv_load_policy: 3,
                          theme: 'light',
                          rel: 0,
                          playlist: 'zVibsdTxM7Q'
                      },

                      events: {
                          'onReady': onPlayerReady,
                      }
                  });
              }
              function onPlayerReady(event){
                  player.mute();
              }
          </script>
        <div class="blackblock" id="blackblock"></div>
        
      <div class="watches_box">
          <h1 class="watches_box_text">Watches</h1>
        </div>
      </section>

      <section id="watches" style="margin-top: 10%">
        <h1 class="headline_wacthes">ROLEX <b style="color: gold;">WATCHES</b></h1>
        <div id="exampleSlider1" class="exampleSlider">
          <div class="MS-content">
              <div class="item">
                <a href="assets/pages/products.php?id_uhren=1">
                  <img src="images/rolex/Datejust 31.png" alt="Datejust 31">
                </a>
                  <h2 class="headline_wacthes_name">Rolex Datejust 31</h2>
                  <p class="item-info">Oyster, 31 mm, Edelstahl Oystersteel und <br>Weißgold mit Diamanten</p>
                  <a href="assets/pages/products.php?id_uhren=1" class="myButton">Weitere Infos</a>
              </div>
              
              <div class="item">
                <a href="assets/pages/products.php?id_uhren=2">
                  <img src="images/rolex/SKY-DWELLER.png" alt="SKY DWELLER">
                </a>
                  <h2 class="headline_wacthes_name">SKY-DWELLER</h2>
                  <p class="item-info">Oyster, 42 mm, Gelbgold</p>
                  <a href="assets/pages/products.php?id_uhren=2" class="myButton">Weitere Infos</a>
                
              </div>

              <div class="item">
                <a href="assets/pages/products.php?id_uhren=3">
                  <img src="images/rolex/Submariner Date.png" alt="">
                </a>
                  <h2 class="headline_wacthes_name">Submariner Date</h2>
                  <p class="item-info">Oyster, 41 mm, Edelstahl Oystersteel und<br> Gelbgold</p>
                  <a href="assets/pages/products.php?id_uhren=3" class="myButton">Weitere Infos</a>
              </div>

              <div class="item">
                <a href="assets/pages/products.php?id_uhren=4">
                  <img src="images/rolex/Oyster Perpetual 41.png" alt="">
                </a>
                  <h2 class="headline_wacthes_name">Oyster Perpetual 41</h2>
                  <p class="item-info">Oyster, 41 mm, Edelstahl Oystersteel</p>
                  <a href="assets/pages/products.php?id_uhren=4" class="myButton">Weitere Infos</a>
              </div>

              <div class="item">
                  <a href="assets/pages/products.php?id_uhren=5">
                      <img src="images/rolex/DAY‑DATE 40.png" alt="">
                  </a>
                  <h2 class="headline_wacthes_name">Oyster Perpetual 41</h2>
                  <p class="item-info">Oyster, 40 mm, Gelbgold</p>
                  <a href="assets/pages/products.php?id_uhren=5" class="myButton">Weitere Infos</a>
              </div>

              <div class="item">
                  <a href="assets/pages/products.php?id_uhren=6">
                      <img src="images/rolex/Yachtmaster 42.png" alt="">
                  </a>
                  <h2 class="headline_wacthes_name">YACHT‑MASTER 42</h2>
                  <p class="item-info">Oyster, 42 mm, Weißgold</p>
                  <a href="assets/pages/products.php?id_uhren=6" class="myButton">Weitere Infos</a>
              </div>

              <div class="item">
                  <a href="assets/pages/products.php?id_uhren=7">
                      <img src="images/rolex/Gmt-master 2.png" alt="">
                  </a>
                  <h2 class="headline_wacthes_name">GMT-Master II</h2>
                  <p class="item-info">Oyster, 40 mm, Edelstahl Oystersteel</p>
                  <a href="assets/pages/products.php?id_uhren=7" class="myButton">Weitere Infos</a>
              </div>

              <div class="item">
                  <a href="assets/pages/products.php?id_uhren=8">
                      <img src="images/rolex/Ladydatejust.png" alt="">
                  </a>
                  <h2 class="headline_wacthes_name">LADY‑DATEJUST</h2>
                  <p class="item-info">Oyster, 28 mm, Edelstahl Oystersteel und Gelbgold</p>
                  <a href="assets/pages/products.php?id_uhren=8" class="myButton">Weitere Infos</a>
              </div>

              <div class="item">
                  <a href="assets/pages/products.php?id_uhren=9">
                      <img src="images/rolex/rolex airking.png" alt="">
                  </a>
                  <h2 class="headline_wacthes_name">AIR‑KING</h2>
                  <p class="item-info">Oyster, 40 mm, Edelstahl Oystersteel</p>
                  <a href="assets/pages/products.php?id_uhren=9" class="myButton">Weitere Infos</a>
              </div>

              <div class="item">
                  <a href="assets/pages/products.php?id_uhren=10">
                      <img src="images/rolex/rolex milgauss.png" alt="">
                  </a>
                  <h2 class="headline_wacthes_name">MILGAUSS</h2>
                  <p class="item-info">Oyster, 40 mm, Edelstahl Oystersteel</p>
                  <a href="assets/pages/products.php?id_uhren=10" class="myButton">Weitere Infos</a>
              </div>
          </div>
          <div class="MS-controls">
              <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
              <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
          </div>
        </div>
        

        <div style="border-top: 1px solid gray; height: 1px; margin-top: -70px;"></div>
        <h1 class="headline_wacthes">BREITLING <b style="color: gold;">WATCHES</b></h1>
        <div id="exampleSlider2" class="exampleSlider">
          <div class="MS-content">
              <div class="item">
                  <a href="assets/pages/products.php?id_uhren=10">
                      <img src="images/rolex/rolex milgauss.png" alt="">
                  </a>
                  <h2 class="headline_wacthes_name">MILGAUSS</h2>
                  <p class="item-info">Oyster, 40 mm, Edelstahl Oystersteel</p>
                  <a href="assets/pages/products.php?id_uhren=10" class="myButton">Weitere Infos</a>
              </div>
          </div>
          <div class="MS-controls">
              <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
              <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
          </div>
        </div>


        <div style="border-top: 1px solid gray; height: 1px; margin-top: -70px;"></div>
        <h1 class="headline_wacthes">AUDEMARS PIQUE <b style="color: gold;">WATCHES</b></h1>
        <div id="exampleSlider3" class="exampleSlider">
          <div class="MS-content">
              <div class="item">
                  <a href="assets/pages/products.php?id_uhren=10">
                      <img src="images/rolex/rolex milgauss.png" alt="">
                  </a>
                  <h2 class="headline_wacthes_name">MILGAUSS</h2>
                  <p class="item-info">Oyster, 40 mm, Edelstahl Oystersteel</p>
                  <a href="assets/pages/products.php?id_uhren=10" class="myButton">Weitere Infos</a>
              </div>
          </div>
          <div class="MS-controls">
              <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
              <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
          </div>
        </div>

          <div style="border-top: 1px solid gray; height: 1px; margin-top: -70px;"></div>
          <h1 class="headline_wacthes">Hubolt <b style="color: gold;">WATCHES</b></h1>
          <div id="exampleSlider4" class="exampleSlider">
              <div class="MS-content">
                  <div class="item">
                      <a href="assets/pages/products.php?id_uhren=10">
                          <img src="images/rolex/rolex milgauss.png" alt="">
                      </a>
                      <h2 class="headline_wacthes_name">MILGAUSS</h2>
                      <p class="item-info">Oyster, 40 mm, Edelstahl Oystersteel</p>
                      <a href="assets/pages/products.php?id_uhren=10" class="myButton">Weitere Infos</a>
                  </div>
              </div>
              <div class="MS-controls">
                  <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                  <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
              </div>
          </div>

          <div style="border-top: 1px solid gray; height: 1px; margin-top: -70px;"></div>
          <h1 class="headline_wacthes">RICHARD MILLE <b style="color: gold;">WATCHES</b></h1>
          <div id="exampleSlider5" class="exampleSlider">
              <div class="MS-content">
                  <div class="item">
                      <a href="assets/pages/products.php?id_uhren=10">
                          <img src="images/rolex/rolex milgauss.png" alt="">
                      </a>
                      <h2 class="headline_wacthes_name">MILGAUSS</h2>
                      <p class="item-info">Oyster, 40 mm, Edelstahl Oystersteel</p>
                      <a href="assets/pages/products.php?id_uhren=10" class="myButton">Weitere Infos</a>
                  </div>
              </div>
              <div class="MS-controls">
                  <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                  <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
              </div>
          </div>
      </section>

        <section id="ich">
            <h3 class="about" style="padding-top: 145px">Über uns</h3>
            <hr>
            <a href="https://www.instagram.com/btiwatches/" target="_blank"><img src="images/Logo/white_small_logo.png" alt="Avatar"/></a>
            <h4 class="btiabout">BTI Watches</h4>
            <p>
                Wir sind eine Gruppe aus vier Schülern, die an einem Projekt arbeiten, welches sich auf eine gut aufgebaute und strukturierte Seite fokussiert.
                Dabei spezialisieren wir uns auf das Thema Luxus Uhren. Das Ziel von BTI Watches ist es, durch unsere professionelle Seite das Wissen der
                Menschen über Luxus Uhren zu erweitern. Wir setzen dabei höchste Priorität aus die Zufriedenheit unserer Kunden.

                Falls sie weitere Fragen oder Anliegen haben, kontaktieren sie uns gerne über das Kontaktformular, welches sie unter "Kontakt" finden.
            </p>
        </section>

      <section id="contact" style="height: 75vh;">
            <div class="contact-section">
            <h6>KONTAKT</h6>
            <div class="border"></div>
                <?php
                echo $error;
                ?>
                <form class="contact-form" action="index.php?mail=true" method="post">
                    <label>
                        <input type="text" name="Name" class="contact-form-text" placeholder="Vor- und Nachname">
                    </label>
                    <label>
                        <input type="email" name="email" class="contact-form-text" placeholder="Email Adresse">
                    </label>
                    <label>
                        <input type="text" name="betreff" class="contact-form-text" placeholder="Betreff">
                    </label>
                    <label>
                        <textarea class="contact-form-text" name="nachricht" placeholder="Deine Nachricht"></textarea>
                    </label>

                    <a href="index.php?mail=true">
                        <input type="submit" class="contact-form-btn" value="Senden" name="submit">
                    </a>
                </form>
            </div>
      </section>
      
    </section>
  </body>
  <footer class="footer-distributed">

      <div class="footer-left">
          <img src="images/Logo/white_small_logo.png" alt="Logo">


          <p class="footer-links">
              <a href="#">HOME</a>
              |
              <a href="#watches">UHREN</a>
              |
              <a href="#ich">ABOUT US</a>
              |
              <a href="#contact">KONTAKT</a>

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="assets/js/main.js"></script>

  <script>
    $(window).scroll(function () {
      if ($(document).scrollTop() > 50) {
        $(".nav").addClass("affix");
        console.log("OK");
        $("#mainListDiv2").addClass("gehhochlan");
        $("#mainListDiv").addClass("gehhochlan");
      } else {
        $(".nav").removeClass("affix");
        $("#mainListDiv2").removeClass("gehhochlan");
        $("#mainListDiv").addClass("gehhochlan");
      }
    });
  </script>

  <script src="assets/js/jquery-2.2.4.min.js"></script>
  <script src="assets/js/multislider.min.js"></script>
  <script>
  $('#exampleSlider1').multislider({
      interval: 5000,
      slideAll: false,
      duration: 700
  });
  $('#exampleSlider2').multislider({
      interval: 5000,
      slideAll: false,
      duration: 700
  });
  $('#exampleSlider3').multislider({
      interval: 5000,
      slideAll: false,
      duration: 700
  });
  $('#exampleSlider4').multislider({
      interval: 5000,
      slideAll: false,
      duration: 700
  });
  $('#exampleSlider5').multislider({
      interval: 5000,
      slideAll: false,
      duration: 700
  });
  </script>
</html>
