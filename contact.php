<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="container-fluid text-center" id="contact">

        <div class="row">
          
                <div class="col-md-6 lg-6 sm-12 mt-5">
        
                    <div class="card-box">
                    
                       <img src="assets/seo-g37cd1a991_1920-removebg-preview-removebg-preview.png" class="contact-img" alt="" srcset="">
                       <h2 class="contact-head">
                        Contact Us 
                       </h2>
                        <!-- <p class="contact-para">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla a eveniet, cumque veniam itaque quas! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora voluptatibus sit consectetur.
                        </p> -->
                       <h4 class="contact-head2">
                        <i class='bx bxs-envelope mail-icon'> </i>
                        : anirban7333@gmail.com
                       </h4>
                       <h4 class="contact-head2">
                        <i class='bx bx-phone mail-icon'></i>
                        : 1234567890
                       </h4>
                      <h4 class="contact-head2">
                        <i class='bx bx-globe mail-icon'></i>
                        : Kolkata, West Bengal
                      </h4>
                      <i class='bx bxl-facebook-circle contact-icon mt-4'></i>
                      <i class='bx bxl-twitter contact-icon mt-4'></i>
                      <i class='bx bxl-instagram contact-icon mt-4'></i>
                    
                    </div>
                    
                    </div>   
                    <div class="col-md-6 lg-6 sm-12 text-center mt-5">
                        <h1 class="form-head">
                            Get Admission
                        </h1>
                        <form class="form-sec">
                            <div class="mb-3">
                                <label for="" class="form-label"> Enter Your Name</label>
                                <input type="text" placeholder="Enter Your Full Name" name="name" class="form-control" id="inp" aria-describedby="">
                                <label for="" class="form-label mt-4"> Enter Your Course</label>
                                <input type="text" placeholder="Enter Your Course" name="course" class="form-control" id="inp" aria-describedby="">
                              <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                              <input type="email" name="email" placeholder="Enter Your Valid Email Adress" required class="form-control" id="inp" aria-describedby="emailHelp">
                              
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                              <input type="password" placeholder="Enter Your Password" name="password" class="form-control" id="inp">
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" name="submit" class="form-btn">Submit</button>
                          </form>
                    </div>
        </div>
</body>
</html>