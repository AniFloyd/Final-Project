<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
    <div class="container-fluid text-center" id="about">

        <div class="main">
            <div class="row">
                <div class="col-lg-6 mt-5 p-5 mx-4" id="about-head">
        
                    <h1 class="about-h1 mt-3">
                        About Us
                    </h1>
                    <div class="para mt-2">
                        <h5 class="about-h5">
                            Ani's School is the MSME-approved professional computer training institute in Kolkata, West Bengal.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae amet quaerat ipsam officiis deleniti odio. Veniam culpa beatae magni sint placeat natus voluptates commodi ipsam, delectus dolore labore pariatur fuga!
                        </h5>
                    </div>
        
                    <button class="about-btn mt-2">
                        Overview
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                    </button>
        
                </div>
                <div class="col-lg-6">
                    <img src="assets/20544-removebg-preview.png" class="about-img mt-5" alt="" srcset="">
                </div>
            </div>
        
                <h1 class="why-h1 mt-5"> 
                    Why Choose Us ?
                </h1>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 why-card">
                <li class="lists">Provision for 100% Internship right after every professional Course completion.</li>
                <li class="lists">Provide MSME Approved Certificate to the candidates after finishing every Courses.</li>
                <li class="lists"> Scope for learning with live project performance.</li>
                <li class="lists">Most affordable and competitive course fees.</li>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 why-card">
                    <li class="lists"> Suitable for all age Groups to admission here ( From Kids to 60 yrs old and above).</li>
                    <li class="lists">Most flexible class timings.</li>
                    <li class="lists"> Multiple Categories of courses like Amateur educational, professional, career & kids, etc. With modern and updated Software and Technologies.</li>
                    <li class="lists">Most affordable and competitive course fees.Proper urban location in Google Map.</li>
                    </div>
        </div>
        
        
        
            </div>
        
        </div>

<!-- FOOTER SECTION AREA -->

        <div class="container-fluid" id="about-footer">
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






        
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="script.js"></script>
</body>
</html>