<?php 
// require "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <style>
        body {
            background-image: url("wel.jpg");
            background-size: cover;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .card-img-top {
            height: 200px;
            background-image: url("soft.jpg"); 
            background-size: cover;
            background-position: center;
        }
        .card-img-cent {
            height: 200px;
            background-image: url("web.jpg"); 
            background-size: cover;
            background-position: center;
        }

        .card-img-rgt {
            height: 200px;
            background-image: url("ph.jpg"); 
            background-size: cover;
            background-position: center;
        }
        .card-title {
            font-size: 20px;
            font-weight: bold;
            color: orange;
            font-style: normal;
        }
        .card-text {
            font-size: 15px;
            font-style: normal;
        }
        .container {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        span{
          color: orange;
        }
        /* .ppl{
          background-image: url(grp.jpg);
        } */

    </style>
</head>
<body>
<center><i class="fa fa-globe" style="color: orange; font-size:30px; margin: 5px;" aria-hidden="true"></i><h5>BLUEBASE SOFTWARE DEVELOPMENT</h5><center><br><hr>
<!-- navbar section -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><span>BB</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jobs title</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Location</a>
          <ul class="dropdown-menu" style="background: transparent; color: white;">
            <li><a class="dropdown-item" href="#">Bangalore(Bengaluru)</a></li>
            <li><a class="dropdown-item" href="#">Hyderabad</a></li>
            <li><a class="dropdown-item" href="#">Pune</a></li>
            <li><a class="dropdown-item" href="#">Chennai</a></li>
            <li><a class="dropdown-item" href="#">Gurgaon(Gurugram)</a></li>
            <li><a class="dropdown-item" href="#">Noida</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">skills</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" style="background: transparent;" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br>
<h3> Let's be together in this growth journey!</h3>
<img src="https://th.bing.com/th/id/OIP.X97i3v6Jrbyf0iTQhweQuAHaE7?rs=1&pid=ImgDetMain" class="img-fluid" alt="...">
<p> We are a growing team, unrelenting and enthusiastic about building great projects. We have folks who are pragmatic, imaginative or quirky combination of both. We yearn for purposein our work and support each other to grow. We work extremely hard with the people we respect and admire, and we play to win.</p>
<h2>WE"RE HIRING!</h2>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-img-top"></div>
                    <div class="card-body">
                        <h5 class="card-title">Software Developer</h5>
                        <p class="card-text">Proficiency in programming languages like Python, Java, or JavaScript. Problem-solving skills and knowledge of data structures/algorithms. Familiarity with version control (e.g., Git), testing, databases, and APIs, alongside soft skills like communication and teamwork.</p>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-img-cent"></div>
                    <div class="card-body">
                        <h5 class="card-title">Web Developer</h5>
                        <p class="card-text">Proficiency in front-end technologies like HTML, CSS, JavaScript (and frameworks/libraries like React, Angular, or Vue). Back-end development skills with languages such as PHP, Python, Node.js, or Java, and knowledge of databases (SQL and NoSQL).</p>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-img-rgt"></div>
                    <div class="card-body">
                        <h5 class="card-title">PHP Developer</h5>
                        <p class="card-text">Proficiency in PHP and its frameworks like Laravel or Symfony. Experience with MySQL or other relational databases. Understanding of web development concepts including MVC architecture, RESTful APIs, and version control (e.g., Git).</p>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
