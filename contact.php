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
                             <!-- FOOTER SECTION -->

    <div class="container-fluid" id="contact-footer">
    <a href="index.php" class="logo-link mx-5">
        <div class="logo">
            Ani's School <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-book-half" viewBox="0 0 16 16">
                <path
                    d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg>
        </div>
    </a>
 
    <div class="footer-icons mt-5">
    <a href="#">
    <i class='bx bxl-facebook-circle contact-icon'></i>
    </a>
                      <a href="#"><i class='bx bxl-twitter contact-icon'></i></a>
                    <a href="#">  <i class='bx bxl-instagram contact-icon'></i></a>
                    
    </div>
    <h6 class="footer-h text-center">
    Copyright © 2022 | Powered By Ani's School [ Designed And Developed By Anirban Biswas ]
    </h6>
    <ul class="footer-ul mt-2">
        <li class="foot-lists">
        <a href="alumni.php">
            Notable Alumni
        </a>
        </li>
        <li class="foot-lists">
        <a href="achivement.php">
            Achivement
        </a>
        </li>
        <li class="foot-lists">
        <a href="faq.php">
            FAQ'S
        </a>
        </li>
    </ul>
    

</div>

        </div>
</body>
</html>