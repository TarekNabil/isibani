<?php
@session_start();
if ($_GET["Previous_School_School_Name"]) {
    foreach ($_GET as $key => $value) {
        $_SESSION[ $key ]=$value;
    }
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

  <section id="contact" class="contact text-center" style="margin-bottom: 280px;padding-top: 80px;">
    <div class="container">
      <div class="row">
        <div class="contact-heading">
          <h4></h4>
          <h2>PARENT OR GUARDIAN DETAILS</h2>
          <img class="img-responsive" src="../img/daag.png" alt="">
        </div>
        <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
          <article class="contact-form wide">
            <form action="choice-of-subject.php" id="contact_form">

              <div class="col-md-5 col-md-offset-1 contact-form-left">
                
                <div class="form-group">
                  <input name="parent_or_guardian_surname" placeholder="Surname" class="form-control"  type="text">
                </div>
                
                <div class="form-group">
                  <input name="parent_or_guardian_id_number" placeholder="ID Number #" class="form-control" type="text">
                </div>
                
                <div class="form-group">
                  <input name="parent_or_guardian_zip" placeholder="Area Code" class="form-control"  type="text">
                </div>
                
                <div class="form-group">
                  <input name="parent_or_guardian_cell_phone" placeholder="Cell Number #" class="form-control" type="text">
                </div>
                
                <div class="form-group">
                  <input name="parent_or_guardian_company_name" placeholder="Name Of The Company" class="form-control"  type="text">
                </div>
                
                <div class="form-group">
                  <input name="parent_or_guardian_section" placeholder="Section or Department" class="form-control"  type="text">
                </div>
                
                <div class="form-group">
                  <input name="parent_or_guardian_work_zip" placeholder="Area Code" class="form-control"  type="text">
                </div>
              </div>

              <div class="col-md-5 contact-form-right text-right">
                
                <div class="form-group field-right">
                  <input  name="parent_or_guardian_first_name" placeholder="First Name (s)" class="form-control"  type="text">
                </div>
                
                <div class="form-group field-right">
                  <input name="parent_or_guardian_address" placeholder="Residential Address" class="form-control" type="text">
                </div>
                
                <div class="form-group field-right">
                  <input name="parent_or_guardian_phone" placeholder="Home Telephone Number #" class="form-control" type="text">
                </div>
                
                <div class="form-group field-right">
                  <input name="parent_or_guardian_occupation" placeholder="Occupation" class="form-control"  type="text">
                </div>
                
                <div class="form-group field-right">
                  <input name="parent_or_guardian_supervisor" placeholder="Supervisor, Foreman or Manager's Name" class="form-control"  type="text">
                </div>
                
                <div class="form-group field-right">
                  <input name="parent_or_guardian_work_address" placeholder="Work Address" class="form-control" type="text">
                </div>
                
                <div class="form-group field-right">
                  <input name="parent_or_guardian_work_phone" placeholder="Work Telephone Number #" class="form-control" type="text">
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
            <a href=""><i class="fa fa-whatsapp"></i></a>
            
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