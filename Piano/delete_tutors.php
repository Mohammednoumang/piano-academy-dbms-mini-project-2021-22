<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"some");
	$query = "delete from tutors where c_id = $_GET[id]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Tutor deleted ...");
window.location.href = "ashow_tutors.php";
</script>