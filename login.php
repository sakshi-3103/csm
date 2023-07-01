<!DOCTYPE html>
<html class="no-js">
    <head>
    <?php
$con=mysqli_connect("localhost","root","","food_dosti")or die("Database Error...!");

    ?>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>

    <body>


    <?php
    include('heade.php');
    ?>


    <!-- Carousel
    ================================================== -->
   

    <div class="section-home about-us fadeIn animated">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-4"></div>
                <div class="col-md-5 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/our-mission-icon.png" alt="">
                        </div>
                        <h3 class="col-title">Login</h3>
                        <div class="col-details">

                            <form action="login.php" method="POST">

                            <div class="row">

                              <div class="form-group col-md-12">
                                  <input type="text" name="uname" class="form-control" placeholder="Username*" required>
                              </div>

                               <div class="form-group col-md-12">
                                  <input type="password" name="pass" class="form-control" placeholder="Password*" required>
                              </div>
                              <div class="form-group">
                                      <button type="submit" name="save" class="btn btn-primary pull-right">Login</button>
                                  </div>
                              </div>
                        
                            </div>  

                                   


                    </form>
                          
                        </div>
                    
                  </div>
                  
                </div>


             

                
            </div>

        </div>
      
    </div> <!-- /.about-us -->




    


     <?php
    include('footer.php');
    ?>




    <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

     

    </div> <!-- /.modal -->





    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </body>
</html>
<?php
if(isset($_POST['save']))
 {
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $res=mysqli_query($con,"select * from admin where username='".$uname."' && password='".$pass."'");
    $row=mysqli_fetch_row($res);

    $res2=mysqli_query($con,"select * from receiver where uname='".$uname."' && pass='".$pass."'");
    $row2=mysqli_fetch_row($res2);

    $res3=mysqli_query($con,"select * from doner where uname='".$uname."' && pass='".$pass."'");
    $row3=mysqli_fetch_row($res3);


   if($num=mysqli_num_rows($res)>0)
     {
      session_start();
      $_SESSION['admin']=$row[0];

    echo'
    <script>
   window.location.href="admin/index.php";
    </script>
    ';
    }
    else if($num2=mysqli_num_rows($res2)>0)
     {
      session_start();
      $_SESSION['receiver']=$row2[0];

    echo'
    <script>
   window.location.href="receiver/index.php";
    </script>
    ';
    }

    else if($num3=mysqli_num_rows($res3)>0)
     {
      session_start();
      $_SESSION['doner']=$row3[0];

    echo'
    <script>
   window.location.href="doner/index.php";
    </script>
    ';
    }

    else
    {
        echo'
    <script>
    alert("Wrong Username & Password ");
  window.location.href="login.php";
    </script>
    ';
    }
}
?>