<?php
$con=mysqli_connect("localhost","root","","food_dosti")or die("Inserted");

$id=$_GET['id'];
if(mysqli_query($con,"UPDATE request SET req_done='1' WHERE id='".$id."'"))
{
	echo "<script>
    alert('Food Received');
    window.location.href='send_req.php';
	</script>";
}
?>