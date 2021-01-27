<?php
    require("function.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admins dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="stylesheet" href="Css/admin.css">

</head>

  <body style="
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url('piano.jpg'); min-height: 700px;">
    <nav class="navbar navbar-dark navbar-expand-sm" style="background-color: #323232" ;>
      <div class=" container">
        <a class="navbar-brand" href=""><img src="logo.png" alt="LOGO" class="rounded-circle border" height="60"
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

  <div>
    <h1 class="display-3 py-2" style="text-align:center;font-weight:500;color:white">Welcome to Piano Academy</h1>

        <div class="offset-2 col-md-8 pd">
          <div class="card text-white bg-dark mb-3">
            <h6 class="card-header" style="font-size:25px;">Total No of Students :
              <?php echo get_par_count() ?></h6>
            <div class="card-body">
              &nbsp &nbsp
              <a type="button" class="btn btn-info btn-lg" href="participant.php">&nbsp &nbsp Add Student
                &nbsp
                &nbsp</a> &nbsp &nbsp
              <a type="button" class="btn btn-light btn-lg" href="ashow_Participant.php">&nbsp &nbsp Show
                Student
                &nbsp
                &nbsp</a>
            </div>
          </div>
        </div> 
        <div class="offset-2 col-md-8 pd">
          <div class="card text-white bg-dark mb-3">
            <h6 class="card-header" style="font-size:25px;">Total no of Tutors :
              <?php echo get_tutors_count() ?></h6>
            <div class="card-body">
              &nbsp &nbsp
              <a type="button" class="btn btn-info btn-lg" href="tutors.php">&nbsp &nbsp Add Tutors &nbsp
                &nbsp</a> &nbsp &nbsp
              <a type="button" class="btn btn-light btn-lg" href="ashow_tutors.php">&nbsp &nbsp Show Tutors
                &nbsp
                &nbsp</a>
            </div>
          </div>
        </div>

        <div class="offset-2 col-md-8 pd">
          <div class="card text-white bg-dark mb-3">
            <h6 class="card-header" style="font-size:25px;">Total no of Students Taken
              Courses : <?php echo get_course_count() ?></h6>
            <div class="card-body">
              &nbsp
              <a type="button" class="btn btn-info btn-lg" href="course_regis.php">&nbsp Add Course to the
                Student
                &nbsp
              </a> &nbsp &nbsp
              <a type="button" class="btn btn-light btn-lg" href="ashow_partutors.php"> Show Student with
                Course</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </script>
</body>

</html>