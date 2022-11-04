<?php
$about_active = 'active_page';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="public/styles/site.css" />

  <title>about me</title>
</head>

<body>
  <!-- Logo + Navigation Bar -->
  <?php include('includes/header.php'); ?>

  <div class="inner-content">

    <!-- Source: (owned work) Natasha Aysseh -->
    <img src="public/images/headshot1.jpg" alt="Photograph of Natasha Aysseh" id="headshot" />

    <div class="description">
      <h1>ABOUT ME</h1>

      <p> I'm currently looking to pursue my interests in <strong>Web Design, Product Analysis, and Data Analysis</strong> in a part-time or full-time summer position.</p>
      <p> For the past year, I've been working at <strong>Rocketbook</strong>, a quickly growing tech-focused product startup.</p>
      <p>While there, I've worked as a <strong>Product Analyst</strong>, using Excel to analyze survey data, Amazon seller data, and user data, designing PRDs for new feature ideas, setting up and implementing R&D experiments, creating competitive analyses, and more.</p>
      <p>If you'd like to hear more about what I've been working on, feel free to contact me using the methods below.</p>
    </div>
  </div>

  <h1 class="small-h1">CONTACT ME</h1>

  <div class="contact">
    <div class="contact-box">
      <p><a href="mailto:nca28@cornell.edu">email</a></p>
    </div>
    <div class="contact-box">
      <p><a href="https://www.linkedin.com/in/natasha-aysseh/">linkedin</a></p>
    </div>
    <div class="contact-box">
      <!-- Source: Original Work, Natasha Aysseh -->
      <p><a href="public/Downloads/Resume.pdf" Download>resume</a></p>
    </div>
  </div>

  <h1 class="small-h1">DETAILS</h1>
  <div class="contact">
    <div class="info-box">
      <p>LOCATION:</p>
      <p class="descr">I live in the NYC Metro Area, and am about 30 minutes train ride from Midtown.</p>
    </div>
    <div class="info-box">
      <p>INTERESTED IN:</p>
      <p class="descr">Using my skills in a product or data analyst position, with digital or physical product. </p>
    </div>
    <div class="info-box">
      <p>LOOKING FOR:</p>
      <p class="descr">Summer intern position from June to August for either full, part-time, or contract work.</p>
    </div>
  </div>

  <section>
    <h4>currently reading:</h4>

    <div class="books">

      <div class="book-single">

        <!-- Source: Ezra Klein via Amazon -->
        <img src="public/images/ezra-klein-book.png" alt="Book cover for Why We're Polarized by Ezra Klein">
        <div class="citation">
          <p>Why We're Polarized by Ezra Klein</p>
          <cite>Source: <a href="https://www.amazon.com/Why-Were-Polarized-Ezra-Klein/dp/147670032X?language=en_US">Ezra Klein via Amazon</a></cite>
        </div>
      </div>

      <div class="book-single">

        <!-- Source: Kurt Andersen via Amazon -->
        <img src="public/images/andersen-book.png" alt="Book cover for How America Went Haywire by Kurt Andersen">
        <div class="citation">
          <p>How America Went Haywire by Kurt Andersen</p>
          <cite>Source: <a href="https://www.amazon.com/Fantasyland-America-Haywire-500-Year-History/dp/1400067219">Kurt Andersen via Amazon</a></cite>
        </div>
      </div>

      <div class="book-single">

        <!-- Source: V.E. Schwab via Amazon -->
        <img src="public/images/schwab-book.png" alt="Book cover for A Darker Shade of Magic by V.E. Schwab">
        <div class="citation">
          <p>A Darker Shade of Magic by V.E. Schwab</p>
          <cite>Source: <a href="https://www.amazon.com/Darker-Shade-Magic-Novel-Shades-ebook/dp/B00ME0TBFE">V.E. Schwab via Amazon</a></cite>
        </div>
      </div>
    </div>
  </section>

  <?php include('includes/footer.php') ?>
</body>

</html>
