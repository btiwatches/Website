<?php include 'assets/sendmail/sendmail.php';?>
<!DOCTYPE html>
<html lang="de-DE">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BTI WATCHES</title>
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



  </head>
  <body>
  <?php
      session_start();

        if(isset($_GET["Ausloggen"])) {
          Ausloggen();
        }
        function Ausloggen() {
          session_unset();
          header("Location:index.php");
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

              <div class="StockBti">
                Suchen sie noch die perfekten Schuhe zu ihrer Uhr?
                <p class="StockBtiLink">
                  Besuchen sie <a href="http://stockbti.de/" target="_blank">StockBti.de</a>.
                </p>
              </div>
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
        <video
          src="images/landing/landing.mp4"
          playsinline
          autoplay
          muted
          loop
          id="myVideo"
        ></video>

        <div class="blackblock" id="blackblock"></div>
        
      <div class="watches_box">
          <h1 class="watches_box_text">Watches</h1>
        </div>
      </section>

      <section id="watches">
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
                  <img src="https://btiwatches.de/images/breitling/AVENGER%20AUTOMATIC%20GMT%2043%20PREIS%20(3.700).png" alt="">
                  <h2 class="headline_wacthes_name">UHREN NAME</h2>
                  <p class="item-info">UHREN INFOS</p>
                  <a href="#" class="myButton">Weitere Infos</a>
              </div>
              
              <div class="item">
                  <img src="https://btiwatches.de/images/breitling/CHRONOMAT%20B01%2042%20PREIS%20(7.700).png" alt="">
                  <h2 class="headline_wacthes_name">UHREN NAME</h2>
                  <p class="item-info">UHREN INFOS</p>
                  <a href="#" class="myButton">Weitere Infos</a>
              </div>

              <div class="item">
                  <img src="https://btiwatches.de/images/breitling/Navitimer%20Automatic%2035%20PREIS(3700).png" alt="">
                  <h2 class="headline_wacthes_name">UHREN NAME</h2>
                  <p class="item-info">UHREN INFOS</p>
                  <a href="#" class="myButton">Weitere Infos</a>
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
                  <img src="https://btiwatches.de/images/audemars_pique/Jules%20PREIS%2027K.png" alt="" style="transform: scale(0.8);">
                  <h2 class="headline_wacthes_name">UHREN NAME</h2>
                  <p class="item-info">UHREN INFOS</p>
                  <a href="#" class="myButton">Weitere Infos</a>
              </div>
              
              <div class="item">
                  <img src="https://btiwatches.de/images/audemars_pique/Millenary%20PREIS%2055K.png" alt="" style="transform: scale(0.8);">
                  <h2 class="headline_wacthes_name">UHREN NAME</h2>
                  <p class="item-info">UHREN INFOS</p>
                  <a href="#" class="myButton">Weitere Infos</a>
              </div>

              <div class="item">
                  <img src="https://btiwatches.de/images/audemars_pique/Royal%20Oak%20PREIS%2081K.png" alt="" style="transform: scale(0.8);">
                  <h2 class="headline_wacthes_name">UHREN NAME</h2>
                  <p class="item-info">UHREN INFOS</p>
                  <a href="#" class="myButton">Weitere Infos</a>
              </div>
          </div>
          <div class="MS-controls">
              <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
              <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
          </div>
        </div>

        <div style="border-top: 1px solid gray; height: 1px; margin-top: -70px;"></div>
        <h1 class="headline_wacthes">HUBOLT <b style="color: gold;">WATCHES</b></h1>
        <div id="exampleSlider4" class="exampleSlider">
          <div class="MS-content">
              <div class="item">
                  <img src="https://btiwatches.de/images/hublot/Integral%20King%20Gold%20Pave%2042mm.png" alt="">
                  <h2 class="headline_wacthes_name">UHREN NAME</h2>
                  <p class="item-info">UHREN INFOS</p>
                  <a href="#" class="myButton">Weitere Infos</a>
              </div>
              
              <div class="item">
                  <img src="https://btiwatches.de/images/hublot/Meca-10%20titanium%2045mm.png" alt="">
                  <h2 class="headline_wacthes_name">UHREN NAME</h2>
                  <p class="item-info">UHREN INFOS</p>
                  <a href="#" class="myButton">Weitere Infos</a>
              </div>

              <div class="item">
                  <img src="https://btiwatches.de/images/hublot/Steel%20Blue%2044mm.png" alt="">
                  <h2 class="headline_wacthes_name">UHREN NAME</h2>
                  <p class="item-info">UHREN INFOS</p>
                  <a href="#" class="myButton">Weitere Infos</a>
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
                  <img src="https://btiwatches.de/images/richard_mille/RM%2053-1%20PREIS%20(1.200.000).png" alt="" style="transform: scale(0.8);">
                  <h2 class="headline_wacthes_name">UHREN NAME</h2>
                  <p class="item-info">UHREN INFOS</p>
                  <a href="#" class="myButton">Weitere Infos</a>
              </div>
              
              <div class="item">
                  <img src="https://btiwatches.de/images/richard_mille/RM%2061-01%20PREIS%20(117.500).png" alt="" style="transform: scale(0.8);">
                  <h2 class="headline_wacthes_name">UHREN NAME</h2>
                  <p class="item-info">UHREN INFOS</p>
                  <a href="#" class="myButton">Weitere Infos</a>
              </div>

              <div class="item">
                  <img src="https://btiwatches.de/images/richard_mille/RM%2070-01%20PREIS%20(890.00).png" alt="" style="transform: scale(0.8);">
                  <h2 class="headline_wacthes_name">UHREN NAME</h2>
                  <p class="item-info">UHREN INFOS</p>
                  <a href="#" class="myButton">Weitere Infos</a>
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
                <form class="contact-form" action="" method="post">
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
                    <input type="submit" class="contact-form-btn" value="Senden">
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
      interval: false,
      slideAll: false,
      duration: 700
  });
  $('#exampleSlider2').multislider({
      interval: false,
      slideAll: false,
      duration: 700
  });
  $('#exampleSlider3').multislider({
      interval: false,
      slideAll: false,
      duration: 700
  });
  $('#exampleSlider4').multislider({
      interval: false,
      slideAll: false,
      duration: 700
  });
  $('#exampleSlider5').multislider({
      interval: false,
      slideAll: false,
      duration: 700
  });
  </script>
</html>
