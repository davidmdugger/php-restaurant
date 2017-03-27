<?php
    define("TITLE", "Dugger's Fine Deli");
    include('includes/arrays.php');
?>

<!DOCTYPE html>
<html>
<head>
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <title><?php echo TITLE; ?></title>
    <link href="css/stylesheet.css" rel="stylesheet">
    
</head>
<body>
   <!--   START OF NAVIGATION -->
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Restaurant</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <?php include('includes/nav.php'); ?>
        </div>
      </div>
    </nav>
    
    <!--    START OF BANNER   -->
    <div id="main-banner">
        <img src="css/img/brick-wall.jpg" />
    </div>