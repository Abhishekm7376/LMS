<?php
include('../dbcon.php');

$id=$_GET['id'];

$qry = "UPDATE `student_reg` SET `status`='YES' WHERE `id`='$id' ";
$run =mysqli_query($con,$qry);

?>

<script type="text/javascript">
	
	window.location="display_student_info.php";
</script>