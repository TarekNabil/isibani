<?php
@session_start();
//var_dump($_SESSION);
//var_dump($_GET);
if ($_GET["parent_or_guardian_surname"]) {
    foreach ($_GET as $key => $value) {
        $_SESSION[ $key ]=$value;
    }
?>
<head>
<script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>
<script src="formjs.js" type="text/javascript"></script>

<!-- comment form original theme

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet">
-->
<link href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet">
<link href="formstyle.css" rel="stylesheet">
<!-- style imported from lucid template  -->
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
                    <li><a href="../#features">Features</a></li>
                    <li><a href="../#about">About</a></li>
                    <li><a href="../#testimonials">Testimonials</a></li>
                    <li><a href="../#pricing">Pricing</a></li>
                    <li><a href="../#contact">Contact</a></li>
                  </ul>
                </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header><!-- end of header section -->

  <section id="contact" class="contact text-center" style="margin-bottom: 180px;padding-top: 80px;">
    <div class="container">
      <div class="row">
        <div class="contact-heading">
          <h4></h4>
          <h2>ACHOICE OF SUBJECT</h2>
          <img class="img-responsive" src="../img/daag.png" alt="">
        </div>
        <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
          <article class="contact-form wide">
            <form action="method-of-payment.php" id="contact_form">

            <label class="control-label " style="margin-top: 20px; text-align: left; margin-left: 20px;">Please select one (1) or more subject choices your prefer:</label>
              <div class="col-md-5 col-md-offset-1 text-left">
                

                <div class="checkbox">
                              <label><input type="checkbox" name="subject[]" value="ZULHL">ZULHL (SBA / ORAL)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="ENGHL">ENGHL (SBA / ORAL)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="XHOHL">XHOHL (SBA / ORAL)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="ZULFA">ZULFA (SBA / ORAL)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="ENGFA">ENGFA (SBA / ORAL)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="XHOFA">XHOFA (SBA / ORAL)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="ACCO">ACCO (SBA)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="BUSE">BUSE (SBA)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="ECON">ECON (SBA)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="AGRI">AGRI (SBA)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="GEOG">GEOG (SBA)</label>
                            </div>
              </div>


              <div class="col-md-5 text-left">
                                          <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="TOUR">TOUR (SBA)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="MATH">MATH (SBA)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="MLIT">MLIT (SBA)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="PHYS">PHYS (SBA)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="LISC">LISC (SBA)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="LIFE">LIFE (SBA)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="HIST">HIST (SBA)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="ZULHL">ZULHL (SBA / ORAL)</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="REED">REED</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"  name="subject[]" value="ZULHL">ZULHL (SBA / ORAL)</label>
                            </div>
                            <div class="contact-form-right text-right">
                <input type="submit" class="submit-btn continue" value="Next">
                </div>
              </div>
            </form>
          </article>
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
            <a href=""><i class="fa fa-behance"></i></a>
            <a href=""><i class="fa fa-dribbble"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
          </div>
          <p>COPYRIGHT &copy; 2015 <a href="#">Mostafizur Rahman</a></p>
        </div>
      </div>
    </div>
  </footer>
</body>
<?php } else {
    echo"Cheating. Huh!";
}?>