<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
$con=mysqli_connect("localhost","root","","food_dosti")or die("Database Error...!");
session_start();
if(isset($_SESSION['doner']))
{

}
else
{
    echo '
 <script>
   window.location.href="../index.php";
    </script>
    ';
}

?>
<?php
    $lname1=mysqli_query($con,"SELECT * FROM doner WHERE id='".$_SESSION['doner']."'");
    $lname=mysqli_fetch_array($lname1);
    
    ?>
<!--  -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FOOD DOSTI</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../admin/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../admin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../admin/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">

        </div>
    <!-- partial:partials/_horizontal-navbar.html -->
    <?php
    include('nav.php');
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-6 mb-4 mb-xl-0">
              <div class="d-lg-flex align-items-center">
                <div>
                  <h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
                  <h1 style="color: blue;font-weight: bold;" class="font-weight-normal mb-2">
                  <?php
                  echo $lname[1];
                  ?>
                  </h1>
                </div>
               
              </div>
            </div>
           
          </div>
          <br>
          <br>
          
          <div class="row">
              <div class="col-lg-3 grid-margin stretch-card">
                <div class="card">
            <a href="index.php">
                  <div class="card-body pb-0">
                    <div class="d-flex align-items-center justify-content-between">
                      <h2 class="text-success font-weight-bold">Home</h2>
                    </div>
                  </div>
                  <canvas id="newClient"></canvas>
                  <div class="line-chart-row-title">Go to home page...</div>
                </div>
              </div>
            </a>
            <div class="col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body pb-0">
                  <div class="d-flex align-items-center justify-content-between">

                  <h2 class="text-danger font-weight-bold">
                    <?php
                    $sql = mysqli_query($con,"SELECT SUM(no_of_peoples) as total FROM request");
              $row = mysqli_fetch_assoc($sql);
              echo $sum = $row['total'];
                    ?>
                  </h2>
                  </div>
                </div>
                <canvas id="allProducts"></canvas>
                <div class="line-chart-row-title">Total Requests</div>
              </div>
            </div>
            <div class="col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body pb-0">
                  <div class="d-flex align-items-center justify-content-between">
                    <h2 class="text-info font-weight-bold">
                      <?php
                    $sql = mysqli_query($con,"SELECT SUM(no_of_peoples) as total FROM request WHERE doner='".$_SESSION['doner']."'");
                    $row = mysqli_fetch_assoc($sql);
                    echo $sum = $row['total'];
                    ?>
                    </h2>
                    
                  </div>
                </div>
                <canvas id="invoices"></canvas>
                <div class="line-chart-row-title">Accepted Requests</div>
              </div>
            </div>
         
      
            
          </div>
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
        include('foot.php');
        ?>        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="../admin/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../admin/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="../admin/vendors/chart.js/Chart.min.js"></script>
    <script src="../admin/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../admin/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
    <script src="../admin/vendors/justgage/raphael-2.1.4.min.js"></script>
    <script src="../admin/vendors/justgage/justgage.js"></script>
    <!-- Custom js for this page-->
    <script src="../admin/js/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>