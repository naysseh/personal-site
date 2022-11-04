<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="public/styles/site.css" />

  <title>page not found</title>
</head>

<body>
  <?php include('includes/header.php'); ?>

  <h1 class="small-h1">Page Not Found</h1>

  <p class="small-description">The page you are looking for (<?php echo $request_uri; ?>) does not exist. Please click on another page title in the navigation bar!</p>

  <?php include('includes/footer.php') ?>

</body>

</html>
