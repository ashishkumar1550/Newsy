<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="css/JiSlider.css">
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <script src = "js/JiSlider.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <script src = "js/jquery.min.js"></script>
</head>
<body>
<div class = "mynav">
	 <nav class="navbar navbar-inverse navbar-fix navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style = "color:black; font-size:1.5em" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
    <li style="margin-top:2%;"><form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" class = "btn alert-btn">Submit</button>
    </form></li>
    <li><a href="#">Home</a></li>
    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  </div>
    </div>
    </li>
    </ul>
    </div>
  </div>
</nav>
</div>
</div>
<div class="container-fluid" style="padding-top: 3%">
  <div class = "col-sm-2">
  <p>
  <h1 style="font-size: 5em; font-family: Balthazar"><b>Newsy</b></h1>
  <h3 style="font-size">The best news for you</h3></p>
  </div>
  <div class = "col-sm-10" style="font-size: 2em; padding-top: 3%">
  </div>
</div>
<?php

    $connection = mysqli_connect("localhost", "root", "", "sandvigbookstore");
    if($connection){
    }else{
        echo "could not establish connection";
    }
    $query = "SELECT * from feed";
    $results = mysqli_query($connection, $query);
    ?>
<div class = "container" style="">
  <?php
    for ($n = 0; $n < mysqli_num_rows($results); $n++) {
        $row = mysqli_fetch_assoc($results);
        $feedid = $row["feed_id"];
        $title = $row["title"];
        $desc = $row["text"];
        $date = $row["date"];
        ?>
        <div class = "bordered-div">
        <div><h3><?php echo "$title"?></h3></div>
        <div><h4><?php echo "$desc" ?></h4></div>
        <div style="text-align: right;"><?php echo "$date" ?></div><?php
      }
      ?>
</div>
</div>