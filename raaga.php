<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS File Links -->
    <link rel="stylesheet" href="mainDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="logos/HyperionLogo.png" />
    <link rel="stylesheet" href="infoDesign.css">
    <title>Raaga-The Indian Music Society</title>
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
                    <img src="logos/RaagaLogo.jpg">
                </div>
                <div class="infoHeading">
                    <h2>Raaga</h2>
                    <h3>The Indian Music Society</h3>
                </div>
                <div class="logo2">
                    <img src="logos/HyperionLogo.jpeg">
                </div>
            </div>

            <!-- Society Introdution -->
            <div class="introParagraph clearFix">
                <p>
                    Music is an art form and cultural activity which inculcates a comprehensive understanding of
                    emotions. 'RAAGA' - The Indian Music Society of PGDAV college is one of the well-achieved
                    societies of the college. The society assists the students to develop exorbitant knowledge and
                    exposure in the sphere of music.
                </p>
                <p>
                    The society mainly work in the field of Hindustani Classical
                    Music and take part in various competitions. It has also performed in front of the President of
                    India - Shri Ram Nath Kovind.
                  </p>
            </div>

            <!-- Social Media Section -->
            <div class="followUsHeading clearFix">
                <h3>Follow Us At:</h3>
            </div>

            <div class="mediaHeading clearFix">
                <div class="mediaHandle">
                    <a href="https://www.instagram.com/raaga.ims/"> 
                        <img src="logos/InstagramLogo.png">
                        <span>/raaga.ims</span>
                    </a>
                </div>
                <div class="mediaHandle">
                    <a href="https://www.facebook.com/Raaga.PGDAV/">
                        <img src="logos/FacebookLogo.png">
                        <span>/Raaga.PGDAV</span>
                    </a>
                </div>
            
            </div>
            

            <!-- -----------------Core Team Section------------ -->
            <div id="CoreTeam" class="coreHeading clearFix">
                <h3>Core Team</h3>
            </div>
            <div class="coreTeam clearFix">
                <div class="president">
                    <img src="raaga/coreteam/Rahul Chaudhary_President.jpg">
                    <h3 class="name">Rahul Chaudhary</h3>
                    <h4 class="post">President</h4>
                </div>
               <!-- <div class="vpresident">
                    <img src="iris/coreteam/SukarmanBhullar_VicePresident.JPG">
                    <h3 class="name">Sukarman Bhullar</h3>
                    <h4 class="post">Vice-President</h4>
                </div>-->
                <div class="secretary">
                        <img src="raaga/coreteam/Sahil Sunil_VicePresident.jpg">
                        <h3 class="name">Sahil Sunil</h3>
                        <h4 class="post">Vice-President</h4>
                </div>
               <div class="jsecretary">
                        <img src="raaga/coreteam/AnanyaKapoor_Coordinator.jpg">
                        <h3 class="name">Ananya Kapoor</h3>
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
                <!--<div class="vpresident">
                    <img src="navrang/mentor/Prabhat Shrivastava.jpg">
                    <h3 class="name">Sh. Prabhat Shrivastava</h3>
                   <h4 class="post">Vice-President</h4>
                </div>--> 

                <div class="secretary">
                        <img src="raaga/mentor/RVS Chuimila.jpg">
                        <h3 class="name">Ms. RVS Chuimila</h3>
                        <!--<h4 class="post">Secretary</h4>-->
                </div>
                <div class="jsecretary">
                        <img src="raaga/mentor/Mr. Parmanand Sharma.jpg">
                        <h3 class="name">Dr. Parmanand Sharma</h3>
                      <!--  <h4 class="post">Joint Secretary</h4>-->
                </div>
            </div>
        </section>

        <?php include "assets/rightsection.php"; ?>
    </section>


    <!-- -------------------------------Society Gallery Section-------------------------------- -->
    <section id="societyGallerySection" class="clearFix">
        <div class="societyGallery clearFix">
            <div class="societySlider fade"><img src="raaga/gallery/Gallery1.jpg"></div> 
            <div class="societySlider fade"><img src="raaga/gallery/Gallery2.jpg"></div> 
            <div class="societySlider fade"><img src="raaga/gallery/Gallery3.jpg"></div> 
            <div class="societySlider fade"><img src="raaga/gallery/Gallery4.jpg"></div> 
             
            
            
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