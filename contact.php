<?php
require 'config2.php';
$submit =  false;
if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $text = $_POST['text'];

    $query = "INSERT INTO `contact_table`(`user_mail`, `user_password`, `user_comments`) VALUES ('$mail','$password','$text')";

    if (mysqli_query($connect, $query)) {
        $submit =  true;
    }
}

?>


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
<div class="container-fluid" id="login">
<div class="container">
<div class="login-sec">
<h1 class="text-center">
    CONTACT US
</h1>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" placeholder="Enter Your Valid Email ID" class="form-input" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" placeholder="Enter Your Password" class="form-input" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label"> Comments</label>
  <input type="text" placeholder="Write Down Your Thoughts/Doubts" class="form-input" name="text" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <?php
    if($submit == true){
        echo '<h4 class="text-center">Thank You For Your Kind Words.s </h4>';
    }
    
  ?>
 <button class="contact-btn" type="submit" name="submit">
Submit
 </button>
    
  </div>
 
</form>

</div>

</div>
<div id="al-footer">
        <div class="container">
            <div class="row">

                <div class="footer-nav col-lg-3 col-md-6 col-sm-6">
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
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-icons mt-4">
                <ul class="ul-icons">
                    <h5 class="icon-head">
                        Find Us On 
                    </h5>
                <i class='bx bxl-facebook-circle ul-icons mt-4'></i>
                    <i class='bx bxl-twitter ul-icons mt-4'></i>
                    <i class='bx bxl-instagram ul-icons mt-4'></i>
                </ul>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                <ul class="footer-ul1 mt-4">
                    <h6 class="ul-head">
                    Quick Links
                    </h6>
                    <li> <a href="index.php"> Home </a> </li>
                    <li> <a href="index.php #course"> Course</a> </li>
                    <li> <a href="index.php #about"> About Us</a> </li>
                    <li> <a href="index.php #contact"> Contact</a> </li>
                </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="info mt-3">
                    <h3 class="info-head">
                        Informations For
                    </h3>
                    <ul class="footer-ul">
                    <li> <a href="index.php #course"> Digital Marketing Course</a> </li>
                    <li><a href="index.php #course"> Website Development Course</a></li>
                    <li><a href="index.php #course"> Cyber Security Course</a></li>
                    <li><a href="index.php #course"> Graphics & Animations Course</a></li>
                    </ul>
                </div>
                </div>

            </div>
        </div>
    </div>

 
   











    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> -->
    <script src="script.js"></script>
</body>

</html>