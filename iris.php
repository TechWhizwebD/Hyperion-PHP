<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS File Links -->
    <link rel="stylesheet" href="mainDesign.css">
    <link rel="shortcut icon" type="image/x-icon" href="logos/HyperionLogo.png" />
    <link rel="stylesheet" href="infoDesign.css">
    <title>Iris-The Film and Photography Society</title>
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
                    <img src="logos/IrisLogo.jpg">
                </div>
                <div class="infoHeading">
                    <h2>Iris</h2>
                    <h3>The Film and Photography Society</h3>
                </div>
                <div class="logo2">
                    <img src="logos/HyperionLogo.jpeg">
                </div>
            </div>

            <!-- Society Introdution -->
            <div class="introParagraph clearFix">
                <p style="font-weight: bold;">
                    "We see something, We capture it. We think more about it, We make a film on it."
                  </p>
                  <p>
                    "We see something, We capture it. We think more about it, We make a film on it."
                    IRIS - FILM AND PHOTOGRAPHY SOCIETY OF PGDAV is one of the creative societies, where we work with students having relevant skills and interest in photography, film making, video editing, script writing and graphic designing.
                    The society mainly covers and participates in various events, goes on photo walks, makes films and does movie reviews.
                    We’ve won many positions in photography and video making in colleges such as World Photography Club , UNIECE , IIT and other colleges of Delhi University and other private colleges.
                    </p>
            </div>

            <!-- Social Media Section -->
            <div class="followUsHeading clearFix">
                <h3>Follow Us At:</h3>
            </div>

            <div class="mediaHeading clearFix">
                <div class="mediaHandle">
                    <a href="https://www.instagram.com/iris_pgdav/"> 
                        <img src="logos/InstagramLogo.png">
                        <span>/iris_pgdav</span>
                    </a>
                </div>
                <div class="mediaHandle">
                    <a href="https://www.facebook.com/iris_pgdav/">
                        <img src="logos/FacebookLogo.png">
                        <span>/iris_pgdav</span>
                    </a>
                </div>
            
            </div>
            

            <!-- -----------------Core Team Section------------ -->
            <div id="CoreTeam" class="coreHeading clearFix">
                <h3>Core Team</h3>
            </div>
            <div class="coreTeam clearFix">
                <div class="president">
                    <img src="iris/coreteam/LakshChadha_President.jpg">
                    <h3 class="name">Laksh Chadha</h3>
                    <h4 class="post">President</h4>
                </div>
                <div class="vpresident">
                    <img src="iris/coreteam/SukarmanBhullar_VicePresident.JPG">
                    <h3 class="name">Sukarman Bhullar</h3>
                    <h4 class="post">Vice-President</h4>
                </div>
               <!-- <div class="secretary">
                        <img src="impressions/coreteam/AnujYadav_Vice President.jpg">
                        <h3 class="name">Anuj Yadav</h3>
                        <h4 class="post">Vice-President</h4>
                </div>
               <div class="jsecretary">
                        <img src="impressions/coreteam/PriyaJha_Coordinator.jpeg">
                        <h3 class="name">Priya Jha</h3>
                        <h4 class="post">Coordinator</h4>
                </div>
                <div class="treasurer">
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
                    <img src="iris/mentor/Purnima - Mentor IRIS.jpg">
                    <h3 class="name">Ms.Purmina Bindal</h3>
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
            <div class="societySlider fade"><img src="iris/gallery/Gallery1.jpg"></div> 
            <div class="societySlider fade"><img src="iris/gallery/Gallery2.jpg"></div> 
            <div class="societySlider fade"><img src="iris/gallery/Gallery3.jpg"></div> 
            <div class="societySlider fade"><img src="iris/gallery/Gallery4.jpg">></div> 
            <div class="societySlider fade"><img src="iris/gallery/Gallery5.jpg"></div> 
         
            
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