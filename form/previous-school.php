<?php
@session_start();
if ($_GET["personal_details_surname"]) {
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
                                <li><a href="#home">Home</a></li>
                                <li><a href="#Classes">Features</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#testimonials">Testimonials</a></li>
                                <li><a href="#Apply">Pricing</a></li>
                                <li><a href="#contact">Contact</a></li>
                              </ul>
                </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header><!-- end of header section -->

  <section id="contact" class="contact text-center" style="padding-top: 80px;">
    <div class="container">
      <div class="row">
        <div class="contact-heading">
          <h4></h4>
          <h2>Previous School</h2>
          <img class="img-responsive" src="../img/daag.png" alt="">
        </div>
        <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
          <article class="contact-form wide">
            <form action="parent-or-guardian.php" method="get" id="contact_form">
              <div class="col-md-5 col-md-offset-1 contact-form-left">
                
                <div class="form-group">
                  <input  name="Previous_School_School_Name" placeholder="Last School Attended" class="form-control"  type="text">
                </div>
                
                <div class="form-group">
                  <input name="Previous_School_grade" placeholder="Grade" class="form-control"  type="text">
                </div>
                
              </div>
              <div class="col-md-5 contact-form-right text-right">
                
                <div class="form-group field-right">
                  <input name="Previous_School_year" placeholder="Year" class="form-control"  type="text">
                </div>

                <div class="form-group field-right">
                  <select name="Previous_School_province" class="form-control" >
                    <option value=" " >Please select Province</option>
                    <option >Andhra Pradesh</option>
                    <option >Arunachal Pradesh</option>
                    <option >Assam</option>
                    <option >Bihar</option>
                    <option >Chandigarh</option>
                    <option >Chhattisgarh</option>
                    <option >Dadra and Nagar Haveli</option>
                    <option >Daman and Diu</option>
                    <option >Goa</option>
                  </select>
                </div>
                <input type="submit" class="submit-btn continue" value="Next">
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
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-facebook"></i></a>
           
          </div>
          <p>COPYRIGHT &copy; 2017  Isibani Academy . Designed & Developed by Brandwork</p>
        </div>
      </div>
    </div>
  </footer>
</body>
<?php } else {
    echo"Cheating. Huh!";
}?>