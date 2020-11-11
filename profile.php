<?php
session_start();
include_once 'header.php';

include_once './config.php';
include "./core/database.php";
include "./core/fetchProfile.php";

use Core\Data\Database;
use Core\Data\FetchUser;

$username=$_SESSION['user'];


$db = new Database();
$fu = new FetchUser($db->connect());


$fu->username = $username;
$details=$fu->fetchUser();

$name = ucwords($details[0]['Name']);

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="profile.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
<div class="container">
    <div class="main-body" style="margin-top: 5%;">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $name; ?></h4>
                      <p class="text-secondary mb-1"><?php echo $details[0]['PRN']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $name ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">PRN</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $details[0]['PRN']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Department</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $details[0]['Department']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Year</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $details[0]['Year']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $details[0]['Email']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $details[0]['Mobile_no']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <input type="button" class="btn btn-success" name="changePass" onclick="showUI()" value="Change Password" style="margin-left: 15px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container" id="change" style="display: none;">
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">

        </div>
        <div class="col-md-8 mb-3">
          <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Old Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" id="oldpass">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">New Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" id="newpass">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <input type="button" class="btn btn-success" name="changeNew" value="Change" onclick="changePassword()" style="margin-left: 15px;">
                      </div>
                </div>
            </div>
         </div>
    </div>
  </div>
  <script type="text/javascript" src="js/script.js">
  </script>
</body>
</html>