
      
        
<!DOCTYPE html>
<html lang="en">

<head><title>FCS UAM | Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/all.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
    <!-- STYLE CSS    --><!--link(type="text/css", rel='stylesheet', href='assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <script>
        if((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
            $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');
        } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
            $('#color-skins').attr('href', 'assets/css/color-1.css');
        }
    </script>
 

  <link rel="stylesheet" href="css/style.css">

</head>
<body><!-- HEADER-->

<?php include 'header.php'; ?>

<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content"><!-- SLIDER BANNER-->
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><h2 class="captions">Our Members</h2>
                            <!-- <ol class="breadcrumb">
                                <li><a href="index-2.html">Home</a></li>
                                <li class="active"><a href="#">Register</a></li>
                            </ol> -->
                        </div>
                    </div>
                </div>
                <div class="section nav-subscribe">
                    <div class="container">
                        <div class="nav-subscribe-wrapper">
                            <div class="nav-subscribe-left"><p class="subscribe-text">Register to become a member</p></div>
                            <div class="nav-subscribe-right">
                                <!-- <button class="btn btn-green btn-bold"><span>SUBSCRIBE NOW</span></button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PICTURE AND GALLERY-->
                <!-- <div class="section section-padding picture-gallery">
                    <div class="group-title-index">
                        <h2 class="center-title">Join US Today</h2>

                        <div class="bottom-title"><i class="bottom-icon icon-a-1-01"></i></div>
                    </div>
                    </div> -->
                    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                    <form action="register.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-12 form-group">
                            <label for="username">Firstname</label>
                            <input name = "fname" type="text" id="username" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">Surname</label>
                            <input name = "sname" type="text" id="username" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Email</label>
                            <input name = "email"type="text" id="pword" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Department</label>
                            <input name="dept"type="text" id="pword" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                        <label for="pword">Level</label>
                        <select name="level" class="form-control" id="level">
              <?php
                      if ($file = @fopen('levels.txt','r')){
                          while (($line = fgets($file)) !== false) {
                              $ttt = trim($line);
                              echo "<option value = '$line'>{$ttt}</option>";
                          }
                          fclose($file);
                      }
                  ?>
              </select>
                    </div>
                    <div class="col-md-12 form-group">
                            <label for="pword">DOB</label>
                            <input name = "dob" type="text" id="pword" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Address</label>
                            <input name="address"type="text" id="pword" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Phone Number</label>
                            <input name = "phone"type="text" id="pword" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Have You Given Your Life to Christ?</label>
                            <select name="born" class="form-control" id="born">
              <?php
                      if ($file = @fopen('born.txt','r')){
                          while (($line = fgets($file)) !== false) {
                              $ttt = trim($line);
                              echo "<option value = '$line'>{$ttt}</option>";
                          }
                          fclose($file);
                      }
                  ?>
              </select>
                    </div>
                    <div class="col-md-12 form-group">
                            <label for="pword">If Yes, State the date</label>
                            <input name="dborn"type="text" id="pword" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Gender</label>
                        <select name="gender" class="form-control" id="gender">
              <?php
                      if ($file = @fopen('gender.txt','r')){
                          while (($line = fgets($file)) !== false) {
                              $ttt = trim($line);
                              echo "<option value = '$line'>{$ttt}</option>";
                          }
                          fclose($file);
                      }
                  ?>
              </select>
                       
                    </div>
                    <div class="col-md-12 form-group">
                            <label for="pword">Your Passport</label>
          <input name="file"type="file" class="form-control" placeholder="Choose your passport">
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
                
                    
       
                    <div class="footer-top-right">
                    <button  name ="sub"class="btn btn-blue btn-bold"><span>SUBMIT</span></button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
                    </form>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<?php 

  include 'connect.php';

  if (isset($_POST['sub'])) {
    $file = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];
    $type = $_FILES['file']['type'];
    $filesize = $_FILES['file']['size'];
      $fname  = $_POST['fname'];
      $sname   = $_POST['sname'];
      $email= $_POST['email'];
      $gender   = $_POST['gender'];
      $dob  = $_POST['dob'];
      $dept = $_POST['dept'];
      $phone = $_POST['phone'];
     
      $add = $_POST['address'];
      $level = trim($_POST['level']);
      $born = $_POST['born'];
      $dborn = $_POST['dborn'];
   



     
      


      #HANDLES SETS AND CACAFCODE CREATION

        #GET SET NUMBER

       
          $set_index = file_get_contents('code.txt');
          $new_set_index =$set_index + 1;
          file_put_contents('code.txt',$new_set_index);
          if ($level == "100L") {
            $year =  date("y");
                                    
            #Code uses the index file to create unique registration code.
            $code = "FCSUAM-" .$year . "-" ."NS".$new_set_index;
          }else if ($level == "200DE"){
            $year =  date("y");
                                    
            #Code uses the index file to create unique registration code.
            $code = "FCSUAM-" .$year . "-" ."NS".$new_set_index;
          }else if($level =="200L"){
            $year =  date("y");
                                    
            #Code uses the index file to create unique registration code.
            $code = "FCSUAM-" .$year . "-" .$new_set_index;
        }else if($level =="300L"){
            $year =  date("y");
                                    
            #Code uses the index file to create unique registration code.
            $code = "FCSUAM-" .$year . "-" .$new_set_index;
        }else if($level =="400L"){
            $year =  date("y");
                                    
            #Code uses the index file to create unique registration code.
            $code = "FCSUAM-" .$year . "-" .$new_set_index;
        }else if($level =="500L"){
            $year =  date("y");
                                    
            #Code uses the index file to create unique registration code.
            $code = "FCSUAM-" .$year . "-" .$new_set_index;
        }else if($level =="600L"){
            $year =  date("y");
                                    
            #Code uses the index file to create unique registration code.
            $code = "FCSUAM-" .$year . "-" .$new_set_index;
            if(move_uploaded_file($temp, "pictures/". $file)){
                $sql = "INSERT INTO `fcsapp`.`members` (`id`,`firstname`,`surname`,`dept`,`level`,`gender`,`dob`,`email`,`phone`,`address`,`born_again`,`dborn`,`code`,`file`,`type`,`size`) VALUES (NULL, '$fname', '$sname','$dept', '$level','$gender', '$dob', '$email', '$phone', '$add', '$born', '$dborn', '$code', '$file','$type','$filesize')";
               
                if (mysqli_query($db, $sql)) {
                 
                    echo "
                           <script>
                               alert('Dear $fname, $sname, Your Registration is Successful. Your FCS UAM Code is $code. Copy the code and give the secretary to get your program.');
                           </script>";
                }else{
                   die("Registration not sucessful". mysqli_error($db));
                 }

        }
        }
    }

        ?>
<?php include 'footer.php'; ?>

<!-- LOADING-->
<div class="body-2 loading">
    <div class="dots-loader"></div>
</div>
<!-- JAVASCRIPT LIBS-->
<script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');
} else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');
}</script>
<script src="assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="assets/libs/appear/jquery.appear.js"></script>
<script src="assets/libs/count-to/jquery.countTo.js"></script>
<script src="assets/libs/wow-js/wow.min.js"></script>
<script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script src="assets/libs/isotope/isotope.pkgd.min.js"></script>
<script src="assets/libs/isotope/fit-columns.js"></script>
<script src="assets/js/pages/homepage.js"></script>
</body>

</html>