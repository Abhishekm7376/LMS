<?php

include('../dbcon.php');
$id = $_GET['id'];
$rd = date('d-M-Y');


$res= mysqli_query($con,"UPDATE issue_book SET retdate='$rd' WHERE id=$id");

if($res){
	echo "<script> alert('Book Returned Successfully'); </script>";
}

$book_name="";
$run = mysqli_query($con,"SELECT * from issue_book WHERE id ='$id'");

while($row = mysqli_fetch_array($run)){
	$book_name=$row['bname'];
}


$qryy ="UPDATE add_book SET aqty=aqty+1 WHERE bname = '$book_name' ";
$ress =mysqli_query($con,$qryy) ;



?>

<script type="text/javascript">
	window.location="return_book.php";
</script>