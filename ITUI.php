s<?php
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
            <h3>Information Technology</h3>
            <p class="font-italic">
			Information Technology is a branch that covers engineering subjects and technologies combined with important aspects of IT like computer networks, web-based applications, control systems, artificial intelligence, embedded systems, mobile computing, information retrieval and transmission.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> The central aim of IT management is to generate value through the use of technology. To achieve this, business strategies and technology must be aligned.</li>
              <li><i class="icofont-check-circled"></i> Information Technology is a narrower and more focused field than CS and entails subjects like networking technology for digital devices, financial accounting and management of technological innovation, digital communication, Internet technology and applications, computer simulation modelling, image processing, multimedia systems and project management.</li>
              
            </ul>
           

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  <section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mb-3">Information Technology</h3>
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
                                    <img class="img-fluid" alt="100%x280" src="img/IT/wt.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Web Technology</h4>
                                        <p class="card-text">Web technology refers to the means by which computers communicate with each other using markup languages and multimedia packages. It gives us a way to interact with hosted information, like websites.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/IT/dbms.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Database Management System</h4>
                                        <p class="card-text">Database Management System (DBMS) is a software for storing and retrieving users' data while considering appropriate security measures. It consists of a group of programs which manipulate the database.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/IT/dsa.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Data Structures and Algorithms</h4>
                                        <p class="card-text">A data structure and algorithms is a data organization, management, and storage format that enables efficient access and modification.</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/IT/se.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Software Engineering</h4>
                                        <p class="card-text">Software engineering is a branch of computer science which includes the development and building of computer systems software and applications software. Computer systems software is composed of programs that include computing utilities and operations systems.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/IT/python.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Python</h4>
                                        <p class="card-text">Python is a powerful general-purpose programming language. It is used in web development, data science, creating software prototypes, and so on. Fortunately for beginners, Python has simple easy-to-use syntax. This makes Python an excellent language to learn to program for beginners.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/IT/pic.jpeg">
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
                                    <img class="img-fluid" alt="100%x280" src="img/IT/java.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Java Programming</h4>
                                        <p class="card-text">Java is a powerful general-purpose programming language. It is used to develop desktop and mobile applications, big data processing, embedded systems, and so on. According to Oracle, the company that owns Java, Java runs on 3 billion devices worldwide, which makes Java one of the most popular programming languages.</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/IT/dem.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Digital Electronics and Mechanism</h4>
                                        <p class="card-text">Digital Electronics and Mechanism is performing signal processing using digital techniques with the aid of digital hardware and/or some kind of computing device. Signal processing can be analog as well, but, for a variety of reasons, it is preferred to handle the processing digitally.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="img/IT/oop.jpeg">
                                    <div class="card-body">
                                        <h4 class="card-title">Object Oriented Programming</h4>
                                        <p class="card-text">Object-oriented programming (OOP) is a computer programming model that organizes software design around data, or objects, rather than functions and logic. An object can be defined as a data field that has unique attributes and behavior.</p>
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