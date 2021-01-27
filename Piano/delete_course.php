<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"some");
	$query = "delete from courses where co_id = $_GET[id]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Participant with the Course Deleted ...");
window.location.href = "ashow_partutors.php";
</script>