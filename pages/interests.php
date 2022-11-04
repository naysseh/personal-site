<?php
$interests_active = 'active_page';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="public/styles/site.css" />

  <title>personal interests</title>
</head>

<body>
  <!-- Logo + Navigation Bar -->
  <?php include('includes/header.php'); ?>

  <main class="interests">
    <div class="inner-content">

      <div class="carousel-stack">

        <!-- Instagram -->
        <div class="jewelry">
          <button type="button" id="button-left" class="arrow left" aria-label="Previous Picture"></button>
          <div class="jewelry-stack">
            <picture id="image-1" class="shop-img">
              <!-- Source: (original work) Natasha Aysseh -->
              <img src="public/images/tashii-insta.png" alt="Screenshot of Instagram profile" class="round" />
            </picture>
            <picture id="image-2" class="shop-img hidden">
              <!-- Source: (original work) Natasha Aysseh -->
              <img src="public/images/depop-pic.png" alt="Picture of two pairs of earrings and two necklaces." class="round" />
            </picture>
            <picture id="image-3" class="shop-img hidden">
              <!-- Source: (original work) Natasha Aysseh -->
              <img src="public/images/etsy.png" alt="Screenshot of Etsy profile" class="round" />
            </picture>
          </div>
          <button type="button" id="button-right" class="arrow right" aria-label="Next picture"></button>
        </div>

        <div class="image-buttons">
          <button type="button" id="image-button-1" class="active circle" aria-label="View First Picture"></button>
          <button type="button" id="image-button-2" class="circle" aria-label="View Second Picture"></button>
          <button type="button" id="image-button-3" class="circle" aria-label="View Third Picture"></button>
        </div>
      </div>

      <div class="description" id="jewelry-description">
        <h1>JEWELRY</h1>

        <p>I spend much of my free time keeping up a small jewelry business, called <strong>tashiitrinkets</strong>.</p>
        <p>Starting in 2020, I worked on create earrings with supplies I already owned, selling through my <a href="https://www.instagram.com/tashiitrinkets/">Instagram</a>. I soon moved over to <a href="https://www.depop.com/tashiitrinkets/">Depop</a>, and expanded my collection to include all types of earrings and some necklaces. </p>
        <p>In 2021, I transitioned to a new <a href="https://www.etsy.com/shop/tashiitrinkets">Etsy</a> shop, where I began by creating a line of necklaces dedicated to using secondhand/pre-loved materials.</p>
      </div>
    </div>

    <div class="inner-content">
      <picture class="photography">
        <!-- Source: (original work) Natasha Aysseh -->
        <img src="public/images/photos-pic.png" alt="Screenshot of Instagram account containing photography work." class="round">
      </picture>

      <div class="description">
        <h1>PHOTOGRAPHY</h1>

        <p>Another interest of mine is <strong>photography</strong>. </p>
        <p>Throughout high school, I spent time doing photoshoots with friends and eventually worked with a mentor.</p>
        <p>At university, I've continued in my passion of photography by again doing photoshoots with friends, photographing for different magazines, and taking headshots for my friends, family, and others.</p>
        <p>I've begun to put together these photos in a portfolio via <a href="https://www.instagram.com/digiitally/">Instagram</a>. </p>
      </div>
    </div>
  </main>

  <?php include('includes/footer.php') ?>

  <script type="text/javascript" src="public/scripts/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="public/scripts/carousel.js"></script>
</body>

</html>
