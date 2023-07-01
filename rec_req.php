<!DOCTYPE html>
<html lang="en">
   <head>
<!--  -->
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

      function accept_req(val)
      {
          $.ajax(
        {
          type:"POST",
          url:"accept_ajax.php",
          data:'id='+val,
          success:function(data)
          {
            // document.getElementById('Fees').value=data;
             // $("#item_data").html(data);
        alert("Request Accepted");

             window.location.href="rec_req.php";
          }
        });
      }

      function accept_req2()
      {
        alert("Opps...!...Request Already Accepted");
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
					<div class="row">
            <div class="col-md-1 grid-margin stretch-card" style="height: 300px">
            </div>
             <div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body" style="border-top:4px solid #000">
                  <h4 class="card-title">Request Table</h4>
                 
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr >
                          <th style="font-weight: bold;color: orange;font-size: 20px">Sr No</th>
                          <th style="font-weight: bold;color: orange;font-size: 20px">No Of People</th>
                          <th style="font-weight: bold;color: orange;font-size: 20px">Date</th>
                          <th style="font-weight: bold;color: orange;font-size: 20px">Progress</th>
                          
                          
                        </tr>
                <?php
                $con=mysqli_connect("localhost","root","","food_dosti")or die("Database Error...!");
                if($res=mysqli_query($con,"SELECT * FROM request"))
                {
                  while($row=mysqli_fetch_row($res))
                  {
                    echo'
                    <tr>
                    <td>'.$row[0].'</td>
                    <td>'.$row[2].'</td>
                    <td>'.$row[3].'</td>
                    
                    <td>';
                    if($row[4]=='sent')
                    {
                      echo'<button class="btn btn-block" style="color:#fff;background-color:#000" onclick="accept_req('.$row[0].')">
                       Accept
                       </button>';
                    }
                    else
                    {
                       echo'<button class="btn btn-block" style="color:#fff;background-color:green" onclick="accept_req2()">
                       Accepted
                       </button>';
                    }

                    echo'
                    </td>

                   
                    
                    
                    </tr>';
                  }
                }
                ?>
  



  
                    </table>


                  </div>
                </div>
              </div>
            </div>
            
          </div>
					
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				<?php
        // include('foot.php');
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
<?php
$con=mysqli_connect("localhost","root","","food_dosti")or die("Database Error...!");
if(isset($_POST['save']))
{
	$people=$_POST['people'];
  $date = date('Y-m-d');
	if(mysqli_query($con,"INSERT INTO request VALUES('','".$_SESSION['receiver']."','".$people."','".$date."','sent')"))
	{
		echo "<script>
		alert('Request Sent Succssfully....!');
		window.location.href='send_req.php';
		</script>";
	}
  else
  {
    echo "<script>
    alert('Type Could Not Add....!');
    window.location.href='send_req.php';
    </script>";
  }
}
?>