<?php
include('../dbcon.php');

session_start();
if(!isset($_SESSION['user']))
{
	?>
	<script type="text/javascript">
		window.location="index.php";
	</script>

	<?php
}

?>