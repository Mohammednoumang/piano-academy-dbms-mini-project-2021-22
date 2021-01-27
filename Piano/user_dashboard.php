<?php
    require("function.php");
?>

<!doctype html>
<html lang="en">

<head>
  <title>User dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="stylesheet" href="Css/style.css">

</head>

<body style="background:url(piano.jpg)">
  <nav class="navbar navbar-dark navbar-expand-sm" style="background-color: #323232" ;>
    <div class=" container">
      <a class="navbar-brand" href=""><img src="logo.png" alt="LOGO" class="rounded-circle border" height="60"
          width="60">
        <a style="color:white;">Piano Academy</a>
      <ul class="nav navbar-nav navbar navbar-right">
        <li class="nav-item active"><a class="nav-link" href="admin_dashboard.php"><i
              class="fa fa-home fa-lg"></i>Home</a></li>
        <li class="nav-item "><a class="nav-link" href="show_user.php">Show user</a></li>
        <a class="nav-item nav-link" href="participant.php">Add Participant</a>
       <a class="nav-item nav-link" href="ashow_Participant.php">Show Participant</a>
       <a class="nav-item nav-link" href="tutors.php">Add Tutors</a>
       <a class="nav-item nav-link" href="ashow_tutors.php">Show tutors</a>
        <a class="nav-item nav-link" href="course_regis.php">Add Course to Participant</a>
        <a class="nav-item nav-link" href="ashow_partutors.php">Show Participant with Course</a>

        <li class="nav-item "><a class="nav-link btn-pd" href="logout.php"> <i class="fa fa-sign-out fa-lg"></i>
            Logout</a></li> &nbsp
      </ul>
    </div>
  </nav>
  <h1 class="display-3 my-2" style="text-align:center">Welcome to Piano Academy</h1>

  <div class="col-auto">
    <div class="row">
      <div class=" offset-2 col-md-8 pd">
        <div class="card border-dark">
          <h6 class="card-header">Total no of Users : <?php echo get_user_count(); ?></h6>
          <div class="card-body">
            <a type="button" class="btn btn-block btn-outline-warning" href="show_user.php">Show users</a>
          </div>
        </div>
      </div>

      <div class="offset-2 col-md-8 pd">
        <div class="card border-dark">
          <h6 class="card-header">Total No of Participants : <?php echo get_par_count() ?></h6>
          <div class="card-body">
            &nbsp &nbsp
            <a type="button" class="btn btn-outline-primary" href="participant.php">&nbsp &nbsp Add Participant &nbsp
              &nbsp</a> &nbsp &nbsp
            <a type="button" class="btn btn-outline-warning" href="ashow_Participant.php">&nbsp &nbsp Show Participant
              &nbsp
              &nbsp</a>
          </div>
        </div>
      </div> <br> <br>

      <div class="offset-2 col-md-8 pd">
        <div class="card border-dark">
          <h6 class="card-header">Total no of tutors : <?php echo get_tutors_count() ?></h6>
          <div class="card-body">
            &nbsp &nbsp
            <a type="button" class="btn btn-outline-primary" href="tutors.php">&nbsp &nbsp Add tutor &nbsp
              &nbsp</a> &nbsp &nbsp
            <a type="button" class="btn btn-outline-warning" href="ashow_tutors.php">&nbsp &nbsp Show tutor &nbsp
              &nbsp</a>
          </div>
        </div>
      </div>

      <div class="offset-2 col-md-8 pd">
        <div class="card border-dark">
          <h6 class="card-header">Total no of Participants Taken Courses : <?php echo get_courses_count() ?></h6>
          <div class="card-body">
            &nbsp
            <a type="button" class="btn btn-outline-primary" href="course_regis.php">&nbsp Add Course to the Partcipant
              &nbsp
            </a> &nbsp &nbsp
            <a type="button" class="btn btn-outline-warning" href="ashow_partutors.php"> Show Participant with Course</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  <!-- <footer class="footer">
    <div class="container-fluid">
      <div class="row">

        <div class="offset-1 col-lg-2 align-self-center">
          <div class="text-center">
            <p>
              DBMS mini project <br>
              Dept of CSE.
            </p>
          </div>
        </div>

        <div class="offset-1 col-lg-3">
          <h6>Page creator</h6>
          <h7>About Team</h7><br>
          Vasu Dev Sirvi <br>
          5th sem, ISE<br>
          DBIT Engineering Collage<br>
        </div>
        <div class="col-lg-3 col-sm-5 offset-1">
          &nbsp &nbsp &nbsp &nbsp<a href="" class="fa fa-linkedin"></a> &nbsp &nbsp
          <a href="" class="fa fa-github"></a>
        </div>

      </div>
    </div>
 -->
    <!-- Copyright -->
    <!-- <div class="footer-copyright text-center py-3">© 2020 Copyright
    </div> -->
    <!-- Copyright -->

  <!-- </footer> -->


</body>

</html>