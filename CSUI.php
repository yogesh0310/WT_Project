<?php
session_start();
include_once 'header.php';
// $dept=$_SESSION['dept'];
?>
<link href="assets/css/styles.css" rel="stylesheet" />
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <!-- <h2>We are team of talanted designers making websites with Bootstrap</h2> -->
      <a href="courses.html" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->

  
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>
  <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="img/comp/ce.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Computer Engineering</h3>
            <p class="font-italic">
              Computer engineering is the branch of engineering that integrates electronic engineering with computer sciences. Computer engineers design and develop computer systems and other technological devices. 
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> The goal of computer engineers is to match the proper hardware and software to meet the technological, scientific, and administrative needs of businesses and industries.</li>
              <li><i class="icofont-check-circled"></i> Computer engineering has provided information systems to hospitals and doctors which have allowed for better treatment. Not only have computer systems brought access to medical attention around the world, but they have also made healthcare safer.</li>
              
            </ul>
           

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  <section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mb-3">Computer Engineering</h3>
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/comp/coa.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Computer Organization & Architecture</h4>
                                        <p class="card-text">In computer engineering, computer architecture is a set of rules and methods that describe the functionality, organization, and implementation of computer systems</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/comp/dbms.png">
                                    <div class="card-body">
                                        <h4 class="card-title">Database Management System</h4>
                                        <p class="card-text">Database Management System (DBMS) is a software for storing and retrieving users' data while considering appropriate security measures. It consists of a group of programs which manipulate the database.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/comp/ds.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title">Data Structures</h4>
                                        <p class="card-text">A data structure is a data organization, management, and storage format that enables efficient access and modification.</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/comp/ml.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Machine Learning</h4>
                                        <p class="card-text">Machine learning is an application of artificial intelligence (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/comp/os.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Operating System</h4>
                                        <p class="card-text">An operating system is a software which performs all the basic tasks like file management, memory management, process management, handling input and output, and controlling peripheral devices such as disk drives and printers.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/comp/pic.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Programming in C</h4>
                                        <p class="card-text">C programming is a general-purpose, procedural, imperative computer programming language developed in 1972 by Dennis M. Ritchie at the Bell Telephone Laboratories to develop the UNIX operating system. C is the most widely used computer language.</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/comp/se.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">System Engineering</h4>
                                        <p class="card-text">Systems engineering is a holistic, integrative discipline, wherein the contributions of structural engineers, electrical engineers, mechanism designers, power engineers, human factors engineers.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/comp/toc.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Theory Of Computation</h4>
                                        <p class="card-text">In theoretical computer science and mathematics, the theory of computation is the branch that deals with what problems can be solved on a model of computation, using an algorithm, how efficiently they can be solved or to what degree .</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/comp/wt.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Web Technology</h4>
                                        <p class="card-text">Web technology refers to the means by which computers communicate with each other using markup languages and multimedia packages. It gives us a way to interact with hosted information, like websites.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
    
  <?php

  include_once 'footer.php';

  ?>