<?php
$con=mysqli_connect("localhost","root","","food_dosti")or die("Inserted");

$id=$_GET['id'];
if(mysqli_query($con,"DELETE FROM request WHERE id='".$id."'"))
{
	echo "<script>
    alert('Doner Deleted');
    window.location.href='send_req.php';
	</script>";
}
?>