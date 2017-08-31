<?php
@session_start();
if ($_GET["subject"]) {
    $_SESSION["subject"]=$_GET["subject"];
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

  <section id="price-plan" class="price-plan text-center" style="padding-top: 80px;">
    <div class="container">
      <div class="row">
        <div class="contact-heading">
          <h4></h4>
          <h2>Method Of Payment</h2>
          <img class="img-responsive" src="../img/daag.png" alt="">
        </div>
		<div class="pricing-tables">
    <?php
    if ($_SESSION["plan"]=="Bronze") {
        ?>
      <div class=" wow zoomIn animated">
        <div class="single-table free">
          <div class="table-description"  >
            <p style="margin-bottom: 51px;"> R500 x 3 months for any number of subjects.</p>
            <a href="finish.php?payment=one" class="btn btn-lg btn-default ordernowButton" role="button">SUBMIT NOW</a>
          </div>
        </div>
      </div>
        <?php
    } else {
    ?>
			<div class="col-md-4 col-sm-12 wow zoomIn animated">
				<div class="single-table free">
					<div class="table-description"  >
						<p style="margin-bottom: 51px;"> R600 x 10 months for 4 or more subjects / R550 for less than 4 subjects. This is payable on/before 3rd of each month</p>
						<a href="finish.php?payment=two" class="btn btn-lg btn-default ordernowButton" role="button">SUBMIT NOW</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 wow zoomIn animated">
				<div class="single-table personal">
					<div class="table-description">
						<p> 2 equal installments (2 x R2700) for more than 4 subjects or (2 x R2475) for less than 4 subjects. 1st installment due on/before 03 March. 2nd on/before 03 July. This option gives you a 10% discount.</p>
						<a href="finish.php?payment=three" class="btn btn-lg btn-default ordernowButton" role="button">SUBMIT NOW</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 wow zoomIn animated">
				<div class="single-table business">
					<div class="table-description" >
						<p style="margin-bottom: 25px;"> A once-off payment of R4800 for more than 4 subjects or R4400 for less for less than 4 subjects payable on/before 03 March. This option gives you a 20% discount.</p>
						<a href="finish.php?payment=four" class="btn btn-lg btn-default ordernowButton" role="button">SUBMIT NOW</a>
					</div>
				</div>
			</div>
        <?php
    } ?>
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
</body>
<?php } else {
    echo"Cheating. Huh!";
}?>