<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS File Links -->
    <link rel="stylesheet" href="mainDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="logos/HyperionLogo.png" />
    <link rel="stylesheet" href="infoDesign.css">
    <title>Navrang-The Theatre Society</title>
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
                    <img src="logos/NavrangLogo.png">
                </div>
                <div class="infoHeading">
                    <h2>Navrang</h2>
                    <h3>The Theatre Society</h3>
                </div>
                <div class="logo2">
                    <img src="logos/HyperionLogo.jpeg">
                </div>
            </div>

            <!-- Society Introdution -->
            <div class="introParagraph clearFix">
                <p>
                    A remarkable and breathtaking theatrical union that boldly unites the professional stage where dreamers together approach the universe of theatre...NAVRANG  resembling  the 'nine emotions' is a place to explore the unexplored within ourselves. 
                    NAVRANG has time and again proved it's mettle and made it's space amongst the best out there.Several of our productions have been a talking point in the DU Circuit and the Sahitya Kala Parishad likewise.
                  </p>
            </div>

            <!-- Social Media Section -->
            <div class="followUsHeading clearFix">
                <h3>Follow Us At:</h3>
            </div>

            <div class="mediaHeading clearFix">
                <div class="mediaHandle">
                    <a href="https://www.instagram.com/navrang.abhivyakti/"> 
                        <img src="logos/InstagramLogo.png">
                        <span>/navrang.abhivyakti</span>
                    </a>
                </div>
                <div class="mediaHandle">
                    <a href="https://www.facebook.com/NAVRANGTHEATRESOC/">
                        <img src="logos/FacebookLogo.png">
                        <span>/NAVRANGTHEATRESOC</span>
                    </a>
                </div>
            
            </div>
            

            <!-- -----------------Core Team Section------------ -->
            <div id="CoreTeam" class="coreHeading clearFix">
                <h3>Core Team</h3>
            </div>
            <div class="coreTeam clearFix">
                <div class="president">
                    <img src="navrang/coreteam/Asra_President.jpg">
                    <h3 class="name">Asra</h3>
                    <h4 class="post">President</h4>
                </div>
               <!-- <div class="vpresident">
                    <img src="iris/coreteam/SukarmanBhullar_VicePresident.JPG">
                    <h3 class="name">Sukarman Bhullar</h3>
                    <h4 class="post">Vice-President</h4>
                </div>-->
                <div class="secretary">
                        <img src="navrang/coreteam/SatyamKumar_VicePresident.jpg">
                        <h3 class="name">Satyam Kumar</h3>
                        <h4 class="post">Vice-President</h4>
                </div>
               <div class="jsecretary">
                        <img src="navrang/coreteam/PranjalMalpani_ Coordinator.jpg">
                        <h3 class="name">Pranjal Malpani</h3>
                        <h4 class="post">Coordinator</h4>
                </div>
              <!--  <div class="treasurer">
                        <img src="diversity/coreteam/Harshita_CoordinatorSpunk.jpg">
                        <h3 class="name">Harshita</h3>
                        <h4 class="post">Coordinator<br>Spunk</h4>
                </div>
                <div class="coordinator">
                        <img src="diversity/coreteam/KaranSinghSidhu_CoordinatorJalsa.jpg">
                        <h3 class="name">Karan Singh Sidhu</h3>
                        <h4 class="post">Coordinator<br>Jalsa</h4>
                </div>-->
            </div>
            <!-- -----------------Mentor Section------------ -->
            <div id="Mentors" class="coreHeading clearFix">
                <h3>Mentors</h3>
            </div>
            <div class="coreTeam clearFix">
                <div class="vpresident">
                    <img src="navrang/mentor/Prabhat Shrivastava.jpg">
                    <h3 class="name">Sh. Prabhat Shrivastava</h3>
                  <!-- <h4 class="post">Vice-President</h4>--> 
                </div>

               <!-- <div class="secretary">
                        <img src="hyperion/coreteam/AbhayJain_JointSecretary.jpg">
                        <h3 class="name">Abhay Jain</h3>
                        <h4 class="post">Secretary</h4>
                </div>
                <div class="jsecretary">
                        <img src="hyperion/coreteam/AbhayJain_JointSecretary.jpg">
                        <h3 class="name">Abhay Jain</h3>
                        <h4 class="post">Joint Secretary</h4>
                </div>-->
            </div>
        </section>
<?php include "assets/rightsection.php"; ?>
    </section>


    <!-- -------------------------------Society Gallery Section-------------------------------- -->
    <section id="societyGallerySection" class="clearFix">
        <div class="societyGallery clearFix">
            <div class="societySlider fade"><img src="navrang/gallery/Gallery1.JPG"></div> 
            <div class="societySlider fade"><img src="navrang/gallery/Gallery2.jpg"></div>
            <div class="societySlider fade"><img src="navrang/gallery/Gallery3.jpeg"></div>
            <div class="societySlider fade"><img src="navrang/gallery/Gallery4.JPG"></div> 
            <div class="societySlider fade"><img src="navrang/gallery/Gallery5.JPG"></div> 
            <div class="societySlider fade"><img src="navrang/gallery/Gallery6.JPG"></div> 
            <div class="societySlider fade"><img src="navrang/gallery/Gallery7.JPG"></div> 
            <div class="societySlider fade"><img src="navrang/gallery/Gallery8.JPG"></div>   
            
            
            <a class="socPrev" onclick="plusSociety(-1)">&#10094;</a>
            <a class="socNext" onclick="plusSociety(1)">&#10095;</a>
        </div>
    </section>
  

 
    <?php 
    include "assets/societies.php";
    include "assets/footer.php"; ?>
    <!-- -------------------JavaScript Files--------------  -->
    <script src="mainScript.js"></script>
</body>
</html>