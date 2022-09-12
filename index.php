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

    <!-- NAV-BAR -->

   

    <?php
    include_once('components/nav.php');
    ?>

   
    <!-- body section -->

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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check-c
                        ircle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
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

    <!-- FOOTER SECTION -->

    <div class="container-fluid" id="footer">
    <a href="index.php" class="logo-link mx-5">
        <div class="logo">
            Ani's School <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-book-half" viewBox="0 0 16 16">
                <path
                    d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg>
        </div>
    </a>
    <div class="footer-icons mt-4">
    <a href="#">
    <i class='bx bxl-facebook-circle contact-icon'></i>
    </a>
                      <a href="#"><i class='bx bxl-twitter contact-icon'></i></a>
                    <a href="#">  <i class='bx bxl-instagram contact-icon'></i></a>
                    
    </div>

    <ul class="footer-ul mt-2">
        <li class="foot-lists">
        <a href="alumni.php">
            Notable Alumni
        </a>
        </li>
        <li class="foot-lists">
        <a href="alumni.php">
            Achivement
        </a>
        </li>
    </ul>

</div>













    <!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> -->
    <script src="script.js"></script>
</body>

</html>