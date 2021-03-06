<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Paradise Inn</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="assets/uniform/css/uniform.default.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/wow/animate.css" />


<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<link rel="stylesheet" href="assets/datepicker/css/bootstrap-datepicker3.css">


<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="assets/style.css">

</head>

<body id="home">


<!-- top 
  <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Subscribe</button>
    </form>
 top -->

<!-- header -->
<nav class="navbar  navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="images/logo_sketch.png"  alt="paradise hotel"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" style="margin-right: 10px;">
      
      <ul class="nav navbar-nav" style="font-size: smaller">
        <li><a href="index.php"><img src="images/mapicon.png" style="max-height: 40px;"></a></li>
        <li><a href="rooms.php">Room</a></li>
        <li><a href="art.php">Art</a></li>
        <li><a href="attractions.php">Attractions</a></li>
        <li><a href="blog.php">Guestbook</a></li>
        <li><a href="https://www.facebook.com/paradiseinnjerusalem" target="_blank"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a></li>
        <li><a href="contact.php">Contact</a></li>

        <li><a href="about.php">About</a></li>
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</nav>
<?php

function endswith($string, $test) {
  $strlen = strlen($string);
  $testlen = strlen($test);
  if ($testlen > $strlen) return false;
  return substr_compare(strtolower($string), strtolower($test), $strlen - $testlen, $testlen) === 0;
}

function getGalleryTitle($dir) {
  $title = "Gallery";
  switch ($dir) {
    case "shemesh":
      $title = "Horshat HaShemesh (Sun Grove)";
      break;
    case "yareah":
      $title = "Horshat HaYareah (Moon Grove)";
      break;
    case "mamuta":
      $title = "Mamuta Art and Media Center";
      break;
    case "flora":
      $title = "Local Flora";
      break;
    case "pool":
      $title = "Pool";
      break;
    case "art/chen":
      $title = "Silent Room No. 1 - <a href='http://chencoo.tumblr.com/' target='_blank'>Chen Cohen</a>";
      break;
    case "art/pesi":
      $title = "Room Kit - <a href='http://pesiher.wix.com/pesi-komar' target='_blank'>Pesi Komar</a>";
      break;
    case "art/salamanca":
      $title = "<span style='line-height: 1.5em;'>Private Landscape: Eight Seconds for Paradise<br><a href='http://www.sala-manca.net/' target='_blank'>Sala-manca Group</a> | Electronic mechanism: Amir Markovich</span>";
      break;

  }
  return $title;
}

function getGalleryText($dir) {
  $text = "";
  switch ($dir) {
    case "art/chen":
      $text = "A catalog of deathbed images taken in room #1 of the Paradise Inn";
      break;
    case "art/pesi":
      $text = "Room-Kits for sale! Kit includes: Floor, Hotel Furniture, Walls, Artificial Plants and More! Ceiling not included. Room-Kits can be found in Paradise Hotel Gift Shop or can be ordered through the web site.";
      break;
    case "art/salamanca":
      $text = "If you have dreamt that you have gone through paradise with a rose in your hand, and in the morning you wake up and discover a rose in your hand, then you hold the proof that you have gone through paradise, or that you might have saved a rose (Arturo Maure, “Delgado’s Rose”)<br><span style='font-size: smaller'>User Manual:<br>1. Insert 3NIS in (each time 1NIS then turn the knob)<br>2. Please wait</span>";
      break;
  }
  return $text;
}


?>
<!-- header -->



