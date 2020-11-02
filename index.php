
<?php
session_start();
include('db.php');
if(isset($_POST['login'])){
     $id=$_POST['id'];
     $password=md5($_POST['password']);
    $sel = mysqli_query($conn,"SELECT * FROM `user` WHERE  user_id ='$id' and password='$password'");
    $row = mysqli_num_rows($sel);
    if($row>0){
    $fetch_user=mysqli_fetch_array($sel);
        $_SESSION['user_id'] = $fetch_user['user_id'];
        header("location:reg.php");
    }else{
        header("location:index.php");
    }

}



?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Canteen</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="font/flaticon.css">
    <!-- Star Animation CSS -->
    <link rel="stylesheet" href="css/star-animation.css"> 
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>   
    <section class="fxt-template-animation fxt-template-layout22" data-bg-image="img/figure/bg28-l.jpg">
        <!-- Star Animation Start Here -->
        <div class="star-animation">
            <div id="stars1"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
            <div id="stars4"></div>
            <div id="stars5"></div>
        </div>
        <!-- Star Animation End Here -->   
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 fxt-none-991">
                    <div class="fxt-header">
                        <div class="fxt-transformY-50 fxt-transition-delay-1">
                            <h1> THE <strong>ORBIT</strong> COLLAGE.</h1>
                        </div>
                        <div class="fxt-transformY-50 fxt-transition-delay-2">
                            <h1>Welcome To <b>CANTEEN</b></h1>
                        </div>
                        <div class="fxt-transformY-50 fxt-transition-delay-3">
                            <p>We are adding the new feature in the history of canteen. The students will be able to create thier account and buy the products online directly by visiting online canteen easily.
                                Register the students right now to provide the facilitites.! Charge the amount from the students and the amount will be added to the account of students
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 fxt-bg-color">
                    <div class="fxt-content">                            
                        <div class="fxt-form">                               
                            <h2>Login</h2>
                            <p>Login to register students online.!</p>
                            <form  action="index.php" method="post">
                                <div class="form-group">  
                                    <label for="email" class="input-label">Canteen Holder ID</label>                                              
                                    <input type="tell" id="email" class="form-control" name="id" placeholder="5454" required="required">
                                </div>
                                <div class="form-group">  
                                    <label for="password" class="input-label">Password</label>                                               
                                    <input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
                                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-checkbox-area">
                                        <div class="checkbox">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">Keep me logged in</label>
                                        </div>
                                        <a href="#" class="switcher-text">Forgot Password</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="submit" value="Log In" class="fxt-btn-fill" name="login">
                                </div>
                            </form>                
                        </div> 
                        <div class="fxt-style-line">                               
                            <h3>Or Login With Email</h3> 
                        </div>
                        <ul class="fxt-socials">
                            <li class="fxt-facebook"><a href="#" title="Facebook">Twitter</a></li>                                    
                            <li class="fxt-twitter"><a href="#" title="twitter">Facebook</a></li>
                            <li class="fxt-google"><a href="#" title="google">Google +</a></li>                                    
                            <li class="fxt-linkedin"><a href="#" title="linkedin">Linkedin</a></li>                                    
                        </ul> 
                        <div class="fxt-footer">
                            <p>Don't have an account?<a href="#" class="switcher-text">Register</a></p>
                        </div>                             
                    </div>
                </div>                    
            </div>
        </div>
    </section>    
    <!-- jquery-->
    <script src="js/jquery-3.5.0.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>
</html>