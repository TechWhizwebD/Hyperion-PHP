// JS for top buttonfunction
//Get the button
var mybutton = document.getElementById("upButton");

// When the user scrolls down 120px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

//JS for Quick Link Tabs
function openSideNav(){
    document.getElementById("sideNav").style.width= "80%";
}

function closeSideNav(){
    document.getElementById("sideNav").style.width= "0%";
}

// Loop through all dropdown buttons to toggle between hiding and showing societies - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("societyButton");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    } 
  });
}


//JS for AchieveMent Page

var acc = document.getElementsByClassName("accordion");
var a;
   
for (a = 0; a < acc.length; a++) 
{
  acc[a].addEventListener("click", function() 
  {
    this.classList.toggle("open");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) 
    {
      panel.style.maxHeight = null;
    }
    else 
    {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

//JS for Banner Slideshow
var bannerIndex = 0;
bannerSlides();
var banner;
function plusBanner(position) 
{
  bannerIndex += position;
    if (bannerIndex > banner.length) {bannerIndex = 1}
    else if(bannerIndex < 1){bannerIndex = banner.length}
    for (i = 0; i < banner.length; i++) {
      banner[i].style.display = "none";  
    }
    banner[bannerIndex-1].style.display = "block";  
}

function bannerSlides() 
{
    var i;
    banner = document.getElementsByClassName("bSlider");
    for (i = 0; i < banner.length; i++) {
      banner[i].style.display = "none";  
    }
    bannerIndex++;
    if (bannerIndex> banner.length) {bannerIndex = 1}    
    banner[bannerIndex-1].style.display = "block";  
    setTimeout(bannerSlides, 4000); // Change image every 4 seconds
}

//JS for Achievement Slideshow 
//JS for Gallery Section Slideshow
/* ----------------------------Section1 Slideshow-------------------------*/
var galleryIndex1 = 0;
showSlides1();
var gallery1;
function plusSlides1(position) 
{
  galleryIndex1 += position;
  if (galleryIndex1 > gallery1.length) {galleryIndex1 = 1}
  else if(galleryIndex1 < 1){galleryIndex1 = gallery1.length}
  for (i = 0; i < gallery1.length; i++) {
      gallery1[i].style.display = "none";  
  }
  gallery1[galleryIndex1-1].style.display = "block";  
}
    
function showSlides1() 
{
  var i;
  gallery1 = document.getElementsByClassName("slide1");
  for (i = 0; i < gallery1.length; i++) {
    gallery1[i].style.display = "none";  
  }
  galleryIndex1++;
  if (galleryIndex1> gallery1.length) {galleryIndex1 = 1}    
  gallery1[galleryIndex1-1].style.display = "block";  
  setTimeout(showSlides1, 4000); // Change image every 4 seconds
}

/* ------------------Section 2 Slideshow--------------------------- */
var galleryIndex2 = 0;
showSlides2();
var gallery2;
function plusSlides2(position) 
{
  galleryIndex2 += position;
  if (galleryIndex2 > gallery2.length) {galleryIndex2 = 1}
  else if(galleryIndex2 < 1){galleryIndex2 = gallery2.length}
  for (i = 0; i < gallery2.length; i++) {
    gallery2[i].style.display = "none";  
  }
  gallery2[galleryIndex2-1].style.display = "block";  
}
    
function showSlides2() 
{
  var i;
  gallery2 = document.getElementsByClassName("slide2");
  for (i = 0; i < gallery2.length; i++) {
    gallery2[i].style.display = "none";  
  }
  galleryIndex2++;
  if (galleryIndex2> gallery2.length) {galleryIndex2 = 1}    
  gallery2[galleryIndex2-1].style.display = "block";  
  setTimeout(showSlides2, 4000); // Change image every 4 seconds
}

/* --------------------------------Section3 Slideshow-------------------- */
var galleryIndex3 = 0;
showSlides3();
var gallery3;
function plusSlides3(position) 
{
  galleryIndex3 += position;
  if (galleryIndex3 > gallery3.length) {galleryIndex3 = 1}
  else if(galleryIndex3 < 1){galleryIndex3 = gallery3.length}
  for (i = 0; i < gallery3.length; i++) {
    gallery3[i].style.display = "none";  
  }
  gallery3[galleryIndex3-1].style.display = "block";  
}
    
function showSlides3() 
{
  var i;
  gallery3 = document.getElementsByClassName("slide3");
  for (i = 0; i < gallery3.length; i++) {
    gallery3[i].style.display = "none";  
  }
  galleryIndex3++;
  if (galleryIndex3> gallery3.length) {galleryIndex3 = 1}    
  gallery3[galleryIndex3-1].style.display = "block";  
  setTimeout(showSlides3, 4000); // Change image every 4 seconds
}

/* ---------------------Section 4 Slideshow-------------------- */
var galleryIndex4 = 0;
showSlides4();
var gallery4;
function plusSlides4(position) 
{
  galleryIndex4 += position;
  if (galleryIndex4 > gallery4.length) {galleryIndex4 = 1}
  else if(galleryIndex4 < 1){galleryIndex4 = gallery4.length}
  for (i = 0; i < gallery4.length; i++) {
    gallery4[i].style.display = "none";  
  }
  gallery4[galleryIndex4-1].style.display = "block";  
}
    
function showSlides4() 
{
  var i;
  gallery4 = document.getElementsByClassName("slide4");
  for (i = 0; i < gallery4.length; i++) {
    gallery4[i].style.display = "none";  
  }
  galleryIndex4++;
  if (galleryIndex4> gallery4.length) {galleryIndex4 = 1}    
  gallery4[galleryIndex4-1].style.display = "block";  
  setTimeout(showSlides4, 4000); // Change image every 4 seconds
}

//JS for Achievement's gallery slider
var achieveIndex = 0;
achieveSlides();
var achieve;
function plusAchieve(position) 
{
  achieveIndex += position;
  if (achieveIndex > achieve.length) {achieveIndex = 1}
  else if(achieveIndex < 1){achieveIndex = achieve.length}
  for (i = 0; i < achieve.length; i++) {
    achieve[i].style.display = "none";  
  }
  achieve[achieveIndex-1].style.display = "block";  
}
        
function achieveSlides() 
{
  var i;
  achieve= document.getElementsByClassName("aSlide");
  for (i = 0; i < achieve.length; i++) {
    achieve[i].style.display = "none";  
  }
  achieveIndex++;
  if (achieveIndex> achieve.length) {achieveIndex = 1}    
  achieve[achieveIndex-1].style.display = "block";  
  setTimeout(achieveSlides, 4000); // Change image every 4 seconds
}
    
//JS for society gallery slider
var societyIndex = 0;
societySlides();
var society;
function plusSociety(position) 
{
  societyIndex += position;
  if (societyIndex > society.length) {societyIndex = 1}
  else if(societyIndex < 1){societyIndex = society.length}
  for (i = 0; i < society.length; i++) {
    society[i].style.display = "none";  
  }
  society[societyIndex-1].style.display = "block";  
  }
    
function societySlides() 
{
  var i;
  society = document.getElementsByClassName("societySlider");
  for (i = 0; i < society.length; i++) {
    society[i].style.display = "none";  
  }
  societyIndex++;
  if (societyIndex> society.length) {societyIndex = 1}    
  society[societyIndex-1].style.display = "block";  
  setTimeout(societySlides, 4000); // Change image every 4 seconds
}
   