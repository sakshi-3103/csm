<?php
session_start();

$con=mysqli_connect("localhost","root","","food_dosti")or die("Database Error...!");
$id=$_POST['id'];
if(mysqli_query($con,"UPDATE request SET status='accepted',doner='".$_SESSION['doner']."' WHERE id='".$id."'"))
{
	echo "<script>
    alert('Request Accepted');
    window.location.href='rec_req.php';
	</script>";
}
else
{
	echo "<script>
    alert('Try Again');
    window.location.href='rec_req.php';
	</script>";
}

?>