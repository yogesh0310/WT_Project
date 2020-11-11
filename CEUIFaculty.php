<?php
session_start();
include_once 'faculty-header.php';
$name=$_SESSION['name'];
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 99%;
    height: 700px;
    margin: 5px;
    
  }
  #services{
    width: 99%;
    background-color: grey;
    padding: 150px;
    height: 700px;
    margin: 5px;
  }
  .text{
    color: white;
  }
  .header{
  	margin: 30px;
  	padding-top:10px;
  	text-align: center;
  }
  </style>
  <div class="header">
  	<h1>Welcome <?php echo $name; ?> </h1>
  </div>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="916854.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
    <div class="carousel-item">
      <img src="2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
    <div class="carousel-item">
      <img src="3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<?php
include_once 'footer.php';
?>