<?php
@session_start();
if($_GET["plan"]){
$_SESSION["plan"] = $_GET["plan"];
?>
<head>
  <script src="../js/jquery-2.1.1.js" type="text/javascript"></script>
  <script src="../js/bootstrap.min.js" type="text/javascript"></script>
  <script src="formjs.js" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>


  <link href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet">
  <link href="formstyle.css" rel="stylesheet">
  <!-- style imported from lucid template  -->
  <title> Welcome to Isibani Academy</title>
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/animate.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>


</head>
<body>
  <!-- ====================================================
  header section -->
  <header class="top-header form-header" style="background:#18171D;">
    <div class="container">
      <div class="row">
        <!-- nav starts here -->
        <div class="col-md-12">         
          <nav class="navbar navbar-default" style="margin-top:6px;">
            <div class="container-fluid nav-bar">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a href="index.html"><img src="../img/logo.png" alt="" class="img-responsive logo" style=" margin-top: -30px; margin-bottom: 15px";></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="../#home">Home</a></li>
                    <li><a href="../#features">Classes</a></li>
                    <li><a href="../#about">About</a></li>
                    <li><a href="../#accreditation">Accreditation</a></li>
                    <li><a href="../#pricing">Enrol Now</a></li>
                    <li><a href="../#contact">Contact</a></li>
                  </ul>
                </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header><!-- end of header section -->

  <section id="about" class="details" style="padding-top: 80px;">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-xs-6 col-sm-6 wow slideInUp animated animated" style="visibility: visible; animation-name: slideInUp;">
          <img class="img-responsive details-phone" src="../img/verticle-phone.png" alt="">
        </div>
        <div class="col-md-7  col-xs-6 col-sm-6 wow slideInUp animated animated" style="visibility: visible; animation-name: slideInUp;">
          <h4>Hi......There!</h4>
          <h2>Please make sure that you have the below documents</h2>
          <img class="img-responsive" src="../img/daag.png" alt="">
          <p></p>
          <ul>
            <li>
              <i class="fa fa-trophy"></i>
              Two ( 2 ) certified copies of your latest/grade 12 ( matric ) results.
            </li>
            <li>
              <i class="fa fa-mobile"></i>
              Two ( 2 ) certified copies of your identity document ( ID )
            </li>
            <li>
              <i class="fa fa-bolt"></i>
              Four ( 4 ) ID photos
            </li>
              <li>
              <i class="fa fa-tachometer"></i>
              R500 registration fee which is NOT REFUNDABABLE
            </li>
            <li>
              <i class="fa fa-tachometer"></i>
              A copy of a medical aid card ( if applicable )
            </li>
          </ul>
          <form class="" action="personal_details.php?apply=ok" method="post"  id="">

          <button type="submit" class="download-btn">Continue</button>
          </form>
        </div>
      </div>
    </div>
  </section>

    <!-- footer starts here -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="icons">
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-whatsapp"></i></a>
          </div>
          <p>COPYRIGHT &copy; 2017  Isibani Academy . Designed & Developed by Brandwork</p>
        </div>
      </div>
    </div>
  </footer>
</body>
<?php }else{echo"Cheating. Huh!";}?>