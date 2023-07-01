<!DOCTYPE html>
<html lang="en">
   <head>
<!--  -->
  <?php
$con=mysqli_connect("localhost","root","","food_dosti")or die("Database Error...!");
session_start();
if(isset($_SESSION['receiver']))
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
$accept=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM doner WHERE id='".$_GET['doner_id']."'"));
?>

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
    <script type="text/javascript">
      function delete_re(val)
      {
        var r = confirm("Are you sure....!")
        if(r == true)
        {
          window.location.assign("deletere.php?id="+val);
        }
        else
        {
          txt = "try again!";
        }
      }

       function done_req(val)
      {
        var r = confirm("Are you sure....!")
        if(r == true)
        {
          window.location.assign("done_r.php?id="+val);
        }
        else
        {
          txt = "try again!";
        }
      }
    </script>
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
          <br>
          <br>
					<div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-5 grid-margin stretch-card" style="height: 300px">
              <div class="card" style="border-top:4px solid orange">
                <div class="card-body">
                  <h4 class="card-title"><?php
                  echo $accept[1];
                  ?></h4>
                 <br>
                  <b>Email : </b>
                  <?php
                  echo $accept[2];
                  echo "<br>";
                  ?>
                  <br>
                  <b>Mobile : </b>
                  <?php
                  echo $accept[3];
                  echo "<br>";
                  ?>
                  <br>
                  <b>Address : </b>
                  <?php
                  echo $accept[4];
                  echo "<br>";
                  ?>
                  <br>
                  <b style="color: red">Food Provided By This Doner:</b>
                  &nbsp; <button class="btn" style="background-color: green;color: #fff" onclick="done_req(<?php echo $_GET['req_id']?>)">Yes</button>
                </div>
              </div>
            </div>
            
            
          </div>
					
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				<?php
        include('foot.php');
        ?>				<!-- partial -->
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
?>