<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"some");
	$query = "delete from users where mail = '$_GET[id]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("User Deleted...");
window.location.href = "show_user.php";
</script>