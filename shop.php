<?php

session_start();
$_SESSION[ 'home' ] = false;
$_SESSION[ 'events' ] = true;
$_SESSION[ 'grades' ] = false;
$_SESSION[ 'pages' ] = false;
$_SESSION[ 'profiles' ] = false;

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education - List of Meetings</title>

    <!-- Bootstrap core CSS -->

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.6/css/boxicons.min.css' rel='stylesheet'>


    <!-- Additional CSS Files -->

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css?version=2">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<style>
.con-cards {
  display: flex;
    align-items: center;
    overflow: auto;
    width: 100%;
    padding-top: 14px;
    padding-bottom: 30px;
    padding-left: 49px;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
}
.con-cards:after {
  content: "";
  position: relative;
  min-width: 50px;
  height: 10px;
  background: transparent;
}
.con-cards::-webkit-scrollbar {
  height: 0px;
}
.card {
  box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.05);
  padding: 15px;
  border-radius: 35px;
  width: 260px;
  min-width: 260px;
  position: relative;
  margin: 9px 15px;
  background: #fff;
  scroll-snap-align: center;
  transition: all 0.25s ease;
  border: 2px solid #fff;
}
.add-active {
  /* transform: translate(0, -10px); */
  box-shadow: 0px 10px 30px 0px rgba(254, 160, 26, 0.2);
  border: 2px solid #fea01a;
}
.add-active .add {
  display: none;
}
.add-active .con-image img:not(.bg) {
  transform: scale(1.15);
}
.add-active .con-input-btns {
  display: flex;
}
.con-star {
  position: absolute;
  right: 0px;
  top: 0px;
  margin: 30px;
  font-size: 1.2rem;
}
.con-image {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 200px;
  border-radius: 30px;
  background: #f5f5f5;
}
.con-image img {
  width: 250px;
  z-index: 20;
  transition: all 0.25s ease;
}
.con-image .bg {
  position: absolute;
  transform: translate(10px, 30px);
  z-index: 10;
  filter: blur(20px);
  opacity: 0.4;
}
.con-text {
  width: 100%;
  padding: 10px 0px;
  opacity: 0.5;
  font-size: 0.8rem;
  height:7rem
}
.con-text h3 {
  padding: 5px 0px;
}
.con-price {
  width: 100%;
  text-align: center;
  font-weight: bold;
  padding: 10px;
  font-size: 1.1rem;
  padding-top: 0px;
}
.add {
  width: 100%;
  padding: 15px;
  background: linear-gradient(130deg, #fdc527 0%, #fea01a 100%);
  border: 0px;
  border-radius: 20px;
  color: #fff;
  font-weight: bold;
  font-size: 1rem;
}
.con-input-btns {
  display: flex;
  align-items: center;
  justify-content: center;
  display: none;
}
.con-input-btns input {
  padding: 10px;
  flex: 1;
  width: calc(100% - 100px);
  height: 49px;
  border: 0px;
  border-bottom: 2px solid #f5f5f5;
  text-align: center;
  font-size: 1.3rem;
}
.con-input-btns button {
  padding: 10px;
  min-width: 49px;
  height: 49px;
  border: 0px;
  border-radius: 20px;
  background: linear-gradient(130deg, #fdc527 0%, #fea01a 100%);
  color: #fff;
  font-size: 1.4rem;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.25s ease;
}
.con-input-btns button:active {
  transform: scale(0.8);
}
.priceIcon{
  display: flex;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: space-evenly;
    align-items: center;
}

  </style>
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->

  </head>

<body>

   

  <!-- Sub Header -->
  <?php 
 include "navbar.php"
 ?>
  <!-- ***** Header Area End ***** -->

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Here are our special items shop</h6>
          <h2>MetaShop</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
        
<div class="con-cards-1 con-cards">

</div>

    <div class="footer">
      <p>Copyright © 2023 MetaUniversity. All Rights Reserved. 
    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
      <script src="./assets/js/shop.js"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
 

    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
  </body>

</html>
