<?php 
    require('function.php');
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"some");
    $c_id = "";
    $c_name = "";
    $gender = "";
    $age = "";
    $contact = "";
    $c_role = "";
    $about = "";
    $c_d="";    
?>

<!doctype html>
<html lang="en">

<head>
  <title>Show tutors</title>
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

<body>
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
  <div class="parallax p-2" style="
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-blend-mode: screen;
    background-image: url('piano3.jpg'); /*background-color: rgb(233, 202, 229);*/ min-height: 700px;">
    <div class="col-11">
      <div class="d-flex p-2 text-white">
        <div class="p-2 bg-secondary">Total no of Tutors Registered :</div>
        <div class="p-2 bg-dark">&nbsp &nbsp<?php echo get_tutors_count() ?>&nbsp &nbsp</div>
      </div>

      <br>
      <table class="table table-hover table-dark">
        <thead class="table-dark">
          <tr>
            <th>Tutors id</th>
            <th>Tutors Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Contact</th>
            <th>Tutors Role</th>
            <th>Experience</th>
            <th>Joined Date</th>
            <th>Options</th>
          </tr>
        </thead>

        <!--Php show student-->

        <?php
                    session_start();
                    $query = "select * from tutors order by c_id";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        $c_id = $row['c_id'];
                        $c_name = $row['c_name'];
                        $gender = $row['gender'];
                        $age = $row['age'];
                        $contact = $row['contact'];
                        $c_role = $row['c_role'];
                        $about=$row['about'];
                        $c_d=$row['c_d'];
                    ?>

        <tr>
          <td><?php echo $c_id ?></td>
          <td><?php echo $c_name?></td>
          <td><?php echo $gender ?></td>
          <td><?php echo $age ?></td>
          <td><?php echo $contact ?></td>
          <td><?php echo $c_role ?></td>
          <td><?php echo $about ?></td>
          <td><?php echo $c_d ?></td>
          <td>
            <a type="button" class="btn btn-success" href="update_tutors.php?id=<?php echo $row['c_id'];?>">Update</a>
            &nbsp &nbsp &nbsp
            &nbsp &nbsp &nbsp
            <a type="button" class="btn btn-danger" href="delete_tutors.php?id=<?php echo $row['c_id'];?>">Delete</a>
          </td>
        </tr>

        <?php
                    }
                        
                ?>

      </table>
    </div>

  </div>
  </div>

 <!--  <footer class="footer"> -->
    <!-- <div class="container-fluid">
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

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
</body>

</html>