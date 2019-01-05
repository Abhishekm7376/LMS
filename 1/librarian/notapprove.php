<?php
include('../dbcon.php');

$id=$_GET['id'];

$qry = "DELETE FROM  `student_reg`  WHERE `id`='$id' ";
$run =mysqli_query($con,$qry);

?>

<script type="text/javascript">
	
	window.location="display_student_info.php";
</script>