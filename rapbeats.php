<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS File Links -->
    <link rel="stylesheet" href="mainDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="logos/HyperionLogo.png" />
    <link rel="stylesheet" href="infoDesign.css">
    <title>Rapbeats-The Hip Hop Music Society</title>
</head>
<body>

<?php include "assets/nav.php";
include "assets/sidelinks.php";
?>

    <!-- --------------------------Information Section------------------------------------------- -->
    <section id="infoSection" class="clearFix">
       

    <!-- Description, Core Team and Mentors Section -->
        <section id="leftSection" class="clearFix">
            <!-- Society Heading and Log -->
            <div id="Introduction"class="headingLogo clearFix">
                <div class="logo1">
                    <img src="logos/RapbeatsLogo.jpg">
                </div>
                <div class="infoHeading">
                    <h2>Rapbeats</h2>
                    <h3>The Hip Hop Music Society</h3>
                </div>
                <div class="logo2">
                    <img src="logos/HyperionLogo.jpeg">
                </div>
            </div>

            <!-- Society Introdution -->
            <div class="introParagraph clearFix">
                <p style="font-weight: bold;">
                    Rapbeats was the first ever Hip Hop Music society formed in Delhi University . 
                </p>
                    <p>
                   This is the society which follows hip hop from the soul.Rapbeats represent three vital elements of Hip hop. Rapbeats-The Hip hop Music Society of PGDAV College is a group of talented beatboxers, rappers and music producers .
                    </p>
                   <p>
                   The artists of Rapbeats performs in various competition across India and had won competitions at the Biggest Asia Cultural Fest  Mood Indigo organized by IIT Bombay 4 times across two mazor Competitions ,i.e. Mood Indigo Got Talent and MI-NEM ( The Rap Battle) apart form winning rap battles,Dj Wars and Talent Hunts across 25+ colleges across Delhi.
                   </p>
                   <p>
                  Music Producers from our society have their Music launched from Speed Records and also produced music for the aftermovies of various college festivals 
                    </p>
            </div>

            <!-- Social Media Section -->
            <div class="followUsHeading clearFix">
                <h3>Follow Us At:</h3>
            </div>

            <div class="mediaHeading clearFix">
                <div class="mediaHandle">
                    <a href="https://www.instagram.com/rapbeats7/"> 
                        <img src="logos/InstagramLogo.png">
                        <span>/rapbeats7</span>
                    </a>
                </div>
                <div class="mediaHandle">
                    <a href="https://www.facebook.com/rapbeatspgdav/">
                        <img src="logos/FacebookLogo.png">
                        <span>/rapbeatspgdav</span>
                    </a>
                </div>
            </div>

            <!-- -----------------Core Team Section------------ -->
            <div id="CoreTeam" class="coreHeading clearFix">
                <h3>Core Team</h3>
            </div>
            <div class="coreTeam clearFix">
                <div class="president">
                    <img src="rapbeats/coreteam/Sarthak Srivastava_President.jpg">
                    <h3 class="name">Sarthak Srivastava</h3>
                    <h4 class="post">President</h4>
                </div>
                <!--<div class="vpresident">
                    <img src="hyperion/coreteam/NidhiSingh_VicePresident.jpg">
                    <h3 class="name">Nidhi Singh</h3>
                    <h4 class="post">Vice-President</h4>
                </div>-->
                <div class="secretary">
                        <img src="rapbeats/coreteam/Mayank Grover_Vice President.jpg">
                        <h3 class="name">Mayank Grover</h3>
                        <h4 class="post">Vice-President</h4>
                </div>
                <div class="jsecretary">
                        <img src="rapbeats/coreteam/Anubhav_Coordinator.jpg">
                        <h3 class="name">Anubhav</h3>
                        <h4 class="post">Coordinator</h4>
                </div>
                <!--div class="treasurer">
                        <img src="hyperion/coreteam/VaniGera_Treasurer.jpg">
                        <h3 class="name">Vani Gera</h3>
                        <h4 class="post">Treasurer</h4>
                </div>
                <div class="coordinator">
                        <img src="hyperion/coreteam/HiteshSharma_Coordinator.jpg">
                        <h3 class="name">Hitesh Sharma</h3>
                        <h4 class="post">Coordinator</h4>
                </div>-->
            </div>
            <!-- -----------------Mentor Section------------ -->
            <div id="Mentors" class="coreHeading clearFix">
                <h3>Mentors</h3>
            </div>
            <div class="coreTeam clearFix">
                <!--<div class="vpresident">
                    <img src="hyperion/coreteam/NidhiSingh_VicePresident.jpg">
                    <h3 class="name">Nidhi Singh</h3>
                    <h4 class="post">Vice-President</h4>
                </div>-->
                <div class="secretary">
                        <img src="rapbeats/mentor/Mr. Parmanand Sharma.jpg">
                        <h3 class="name">Mr. Parmanand Sharma</h3>
                        <!--<h4 class="post">Secretary</h4>-->
                </div>
                <div class="jsecretary">
                        <img src="rapbeats/mentor/RVS Chuimila.jpg">
                        <h3 class="name">Ms. RVS Chuimila</h3>
                       <!-- <h4 class="post">Joint Secretary</h4>-->
                </div>
            </div>
        </section>

       <?php include "assets/rightsection.php"; ?>
    </section>


    <!-- -------------------------------Society Gallery Section-------------------------------- -->
    <section id="societyGallerySection" class="clearFix">
        <div class="societyGallery clearFix">
            <div class="societySlider fade"><img src="rapbeats/gallery/Gallery1.jpg"></div> 
            <div class="societySlider fade"><img src="rapbeats/gallery/Gallery2.jpg"></div> 
            <div class="societySlider fade"><img src="rapbeats/gallery/Gallery3.jpg"></div> 
            
            <a class="socPrev" onclick="plusSociety(-1)">&#10094;</a>
            <a class="socNext" onclick="plusSociety(1)">&#10095;</a>
        </div>
    </section>
  <?php include "assets/societies.php"; ?>
    <?php include "assets/footer.php"; ?>
    <!-- -------------------JavaScript Files--------------  -->
    <script src="mainScript.js"></script>
</body>
</html>