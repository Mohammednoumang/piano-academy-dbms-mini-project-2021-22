<?php 
    require('function.php');
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"some");
    $co_id = "";
    $course = "";
    $fees = "";
    $batch = "";
    $name = "";
    $c_name = "";
    $mail = "";
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Show Participant and tutors</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/style.css">

</head>

<body >
  <nav class="navbar navbar-dark navbar-expand-sm" style="background-color: #323232" ;>
    <div class=" container">
      <a class="navbar-brand" href=""><img src="logo.png" href="admin_dashboard.php" alt="LOGO" class="rounded-circle border" height="60"
          width="60">
        <a style="color:white;">Piano Academy</a>
      <ul class="nav navbar-nav navbar navbar-right">
        <li class="nav-item active"><a class="nav-link" href="admin_dashboard.php"><i
              class="fa fa-home fa-lg"></i>Home</a></li>
        <li class="nav-item "><a class="nav-link" href="show_user.php">Show user</a></li>
        <a class="nav-item nav-link" href="participant.php">Add Student</a>
       <a class="nav-item nav-link" href="ashow_Participant.php">Show Student</a>
       <a class="nav-item nav-link" href="tutors.php">Add Tutors</a>
       <a class="nav-item nav-link" href="ashow_tutors.php">Show tutors</a>
        <a class="nav-item nav-link" href="course_regis.php">Add Course to Student</a>
        <a class="nav-item nav-link" href="ashow_partutors.php">Show Student with Course</a>

        <li class="nav-item "><a class="nav-link btn-pd" href="logout.php"> <i class="fa fa-sign-out fa-lg"></i>
            Logout</a></li> &nbsp
      </ul>
    </div>
  </nav>

<div class="parallax p-2" style="
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-blend-mode: screen;
    background-image: url('piano3.jpg'); min-height: 700px;">
    <div class="col-10">
      <div class="d-flex p-2 text-white">
        <div class="p-2 bg-secondary">Total no of Students Taken Courses :</div>
        <div class="p-2 bg-dark">&nbsp &nbsp<?php echo get_course_count() ?>&nbsp &nbsp</div>
      </div>

      <br>
      <table class="table table-hover table-dark">
        <thead class="table-dark">
          <tr>
            <th>Course</th>
            <th>Participant Name</th>
            <th>Batch </th>
            <th>Tutor name</th>
            <th>Fees</th>
            <th>Mail ID</th>
            <th>Delete</th>
          </tr>
        </thead>

        <!--Php show student-->

        <?php
                    session_start();
                    $query = "select * from courses order by co_id";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        $co_id = $row['co_id'];
                        $course = $row['course'];
                        $name = $row['name'];
                        $batch = $row['batch'];
                        $c_name = $row['c_name'];
                        $fees = $row['fees'];
                        $mail = $row['mail'];
                  
                    ?>

        <tr>
          <td><?php echo $course ?></td>
          <td><?php echo $name?></td>
          <td><?php echo $batch ?></td>
          <td><?php echo $c_name ?></td>
          <td><?php echo $fees?></td>
          <td><?php echo $mail ?></td>
          <td>
            &nbsp &nbsp &nbsp
            <a type="button" class="btn btn-danger" href="delete_course.php?id=<?php echo $row['co_id'];?>">Delete</a>
          </td>
        </tr>

        <?php
                    }
                        
                ?>

      </table>
    </div>

  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
</body>

</html>