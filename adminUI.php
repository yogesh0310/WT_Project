<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/css/forms.css">
	<link rel="stylesheet" type="text/css" href="css/css/style1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<style type="text/css">
		html,body{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
		}
		.navigation-bar{
			width: 100%;
			height: 70px;
			margin: 5px;
			margin-bottom: 15px;
			padding: 5px;
			background-color:#f44336;
		}
		.text{
			text-align: center;
			color: white;
			font-family: Comic Sans MS;
		}
        input[type="password"]{
            width: 100%;
            padding: 12px;
            border: 1px solid black;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
	</style>
</head>
<body>
<div class="navigation-bar">
 	<div class="text">
 		<h1>MITAOE</h1>
 	</div>
</div>
<section class="container-fliud">
          <section class="row justify-content-center" style="background: url(p.png);">
            <section class="col-12 col-sm-2 col-md-8 col-lg-6">
                <div class="form-container">
                    <h3 align="center" style="font-family: Raleway;">Prediction Form</h3><br>
				        Name:<input type="text" id="fname" name="fname"><br>
				        Email:<input type="text" id="email" name="email"><br>
                        Faculty_id:<input type="text" id="faculty_id" name="faculty_id"><br>
                        Mobile:<input type="text" id="mobile" name="mobile"><br>
                        Password:<input type="Password" id="pass" name="pass"><br>
                        Department:<br>
                        <select id="department">
				            <option>Select</option>
                            <option value="ME">Mechanical</option>
                            <option value="CS">Computer</option>
                            <option value="CE">Civil</option>
                            <option value="ETX">Electronics</option>
                            <option value="IT">Information Technology</option>
                            <option value="ENTC">Electronics and Telecommunication</option>
				        </select><br>
				        <input type="submit" class="btn btn-success" id="submit" value="Submit" onclick="validateFacultyField()" align="center">
	    		</section>
			</section>
		</section>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>