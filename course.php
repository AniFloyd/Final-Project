<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- MANUAL CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <!-- Bootsrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Box-icon CDN -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Google Fonts CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Animations.Css CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
<!-- nav-bar -->
<?php
    include_once('components/nav.php');
    ?>


    <!-- main body -->
    <div class="container-fluid course-sec" id="course">
        <h1 class="course-sec-head text-center">
            Our Courses are <span id="type"></span>
        </h1>
        <div class="row">
            <div class="col-md-6 col-lg-3 col-sm-12 ">
                <div class="card" style="width: 18rem;">
                    <img src="assets/card-img-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Web Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="card-btn">
                            Choose This Course
                            <svg xmlns="httcol-lg-3 col-sm-12p://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <img src="assets/preview.jpg" class="" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Digital Marketing</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="card-btn">
                            Choose This Course
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <img src="assets/bus_illustration.png" class="" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Graphics & Animations</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="card-btn">
                            Choose This Course
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <img src="assets/cyber-security-illustration-free-vector.jpg" class="cyb-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cyber Security</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="card-btn">
                            Choose This Course
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>




  
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="script.js"></script>
   </body>
</html>