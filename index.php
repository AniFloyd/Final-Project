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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Box-icon CDN -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Google Fonts CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Animations.Css CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>

    <!-- NAV-BAR -->



    <?php
    include_once('components/nav.php');
    ?>


    <!-- BANNER SECTION -->

    <div class="container-fluid banner-sec">

        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12  mt-5 banner">
                <h5 class="upper-head mt-4">
                    Welcome To Ani's School.
                </h5>
                <h1 class="banner-head1 p-3">
                    Grow your skills by getting admission in our school.
                </h1>
                <h5 class="banner-head2 mt-4">
                    Best <span id="banner-span">Computer Training & Personality Development</span> Institute.
                </h5>

                <button class="banner-btn">
                    Get Admission
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-c
                        ircle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                </button>

            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 mt-5">
                <div class="image">
                    <img src="assets/banner-illustration.png" class="banner-img" alt="" srcset="">
                </div>
            </div>
        </div>


    </div>
    <!-- COURSE SECTION -->
    <div class="container-fluid course-sec" id="course">
        <h1 class="course-sec-head text-center">
            Our Courses are <span id="type"></span>
        </h1>
        <div class="row">
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <img src="assets/card-img-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Web Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button class="card-btn">
                            Choose This Course
                            <svg xmlns="httcol-lg-3 col-sm-12p://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ABOUT SECTION -->
    <div class="container-fluid text-center" id="about">

        <div class="main">
            <h1 class="text-center about-heading">
                About Us
            </h1>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mx-5 p-4" id="about-head">

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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </button>

                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 p-5 mx-5">
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



    <!-- CONTACT SECTION -->
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
                        <label for="" class="form-label mt-5"> Enter Your Course</label>
                        <input type="text" placeholder="Enter Your Course" name="course" class="form-control" id="inp" aria-describedby="">
                        <label for="exampleInputEmail1" class="form-label mt-5">Email address</label>
                        <input type="email" name="email" placeholder="Enter Your Valid Email Adress" required class="form-control" id="inp" aria-describedby="emailHelp">

                    </div>

                    <button type="submit" name="submit" class="form-btn mt-5">Submit</button>
                </form>
            </div>
            <!-- FOOTER SECTION -->

            <div class="container-fluid" id="footer">
                <a href="index.php" class="logo-link mx-5">
                    <div class="logo">
                        Ani's School <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                            <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                        </svg>
                    </div>

                </a>
                <div class="adress">
                    <h5 class="adress-head">
                        Belgharia, <br> Nandan Nagar Office Para - 665. <br> Kolkata - 700083. <br>
                        Call : 91+1234567890
                    </h5>
                </div>
                <div class="info mt-3">
                    <h3 class="info-head">
                        Informations For
                    </h3>
                    <ul class="footer-ul">
                    <li> <a href="#course"> Digital Marketing Course</a> </li>
                    <li><a href="#course"> Website Development Course</a></li>
                    </ul>
                </div>
                <div class="footer-icons">
                    <a href="#">
                        <i class='bx bxl-facebook-circle contact-icon'></i>
                    </a>
                    <a href="#"><i class='bx bxl-twitter contact-icon'></i></a>
                    <a href="#"> <i class='bx bxl-instagram contact-icon'></i></a>

                </div>

                <ul class="footer-ul mt-3">
                    <h6 class="ul-head">
                    Quick Links
                    </h6>
                    <li> <a href="index.php"> Home </a> </li>
                    <li> <a href="#course"> Course</a> </li>
                    <li> <a href="#about"> About Us</a> </li>
                    <li> <a href="#contact"> Contact</a> </li>
                </ul>




            </div>

        </div>













        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="script.js"></script>
</body>

</html>

<!--   -->