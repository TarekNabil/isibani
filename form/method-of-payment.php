<?php
@session_start();
if ($_GET["subject"]) {
    $_SESSION["subject"]=$_GET["subject"];
    $name = $_SESSION["personal_details_first_name"];
    $sname= $_SESSION["personal_details_surname"];
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

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Dear: <?php echo $name." ".$sname;?></h4>
        </div>
        <div class="loading-image">
            <img class="img-responsive" src="../img/loading.gif" alt="" style="margin: auto;">
        </div>
        <div class="modal-error" style="display:none;">

        </div>
        <div class="modal-body" style="display:none;">
          
          <p>Congratulations your Isibani Academy Enrollment application has be sent, please bring the following documents with you to our offices, within the next 20 working days.....</p>
          <ul>
            <li>Two (2) Certified copies of your latest/grade 12 (metric)</li>
            <li>Two (2) certified identity document (ID) or Smart-card.</li>
            <li>Four (4) ID Photos</li>
            <li>R500 registration fee - which is NOT REFUNDABLE.</li>
            <li>A copy of a medical aid card (if applicable)</li>
          </ul>
          <strong>Thank You!</br>Isibani Academy</srtong>
        </div>

        <div class="modal-footer">

          <a type="button" class="btn btn-default" id="done" href="../#home">DONE</a>
          <!-- href="../#home" -->
          
        </div>
      </div><!-- Modal content-->
      
    </div><!-- Modal dialog-->
  </div><!-- Modal -->
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
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-payment="one" data-backdrop="static" data-keyboard="false">SUBMIT NOW</button>
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
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-payment="two" data-backdrop="static" data-keyboard="false">SUBMIT NOW</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 wow zoomIn animated">
        <div class="single-table personal">
          <div class="table-description">
            <p> 2 equal installments (2 x R2700) for more than 4 subjects or (2 x R2475) for less than 4 subjects. 1st installment due on/before 03 March. 2nd on/before 03 July. This option gives you a 10% discount.</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-payment="three" data-backdrop="static" data-keyboard="false">SUBMIT NOW</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 wow zoomIn animated">
        <div class="single-table business">
          <div class="table-description" >
            <p style="margin-bottom: 25px;"> A once-off payment of R4800 for more than 4 subjects or R4400 for less for less than 4 subjects payable on/before 03 March. This option gives you a 20% discount.</p>
            
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-payment="four" data-backdrop="static" data-keyboard="false">SUBMIT NOW</button>
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
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-whatsapp"></i></a>
          </div>
         <p>COPYRIGHT &copy; 2017  Isibani Academy . Designed & Developed by Brandwork</p>
        </div>
      </div>
    </div>
  </footer>
  <script>
    var payment;
    $('#myModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      payment = button.data('payment')
      $.ajax({
        url: "finish.php",
        type: "GET",
        data:{
          payment:payment
        },
        error: function (xhr, ajaxOptions, thrownError) {
          
          $(".modal-error").show().html(xhr.status+"Please refresh page and try again");
          $(".loading-image").hide();
          //alert(thrownError);
        },
        success: function(result){

          $(".modal-body").show();
          $(".loading-image").hide();
        }
      });


      
    });
    $("#done").click(function(){    });
    $('#loading-image').bind('ajaxStart', function(){$(this).show();}).bind('ajaxStop', function(){$(this).hide();});
  </script>
</body>
<?php } else {
    echo"Cheating. Huh!";
    }?>