<?php
	function get_tutors_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"some");
		$coach_count = "";
		$query = "select count(*) as c_id from tutors";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$coach_count = $row['c_id'];
		}
		return($coach_count);
    }

    function get_par_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"some");
		$par_count = "";
		$query = "select count(*) as par_id from participant";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$par_count = $row['par_id'];
		}
		return($par_count);
    }

    function get_user_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"some");
		$user_count = "";
		$query = "select count(*) as user_count from users";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_count = $row['user_count'];
		}
		return($user_count);
    }

    function get_course_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"some");
		$course_count = "";
		$query = "select count(*) as co_id from courses";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$course_count = $row['co_id'];
		}
		return($course_count);
    }

?>