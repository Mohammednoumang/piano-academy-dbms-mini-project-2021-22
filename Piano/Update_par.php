<?php
    session_start();
    require("function.php");
    $connection = mysqli_connect ("localhost","root","");
    $db = mysqli_select_db ($connection,"some");
    $par_id = "";
    $name = "";
    $gender = "";
    $age = "";
    $contact = "";
    $city = "";
    $r_d = "";
    $query = "select * from participant where par_id = $_GET[id]";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run))
    {
        $par_id = $row['par_id'];
        $name = $row['name'];
        $gender = $row['gender'];
        $age = $row['age'];
        $city = $row['city'];
        $contact = $row['contact'];
        $r_d = $row['r_d'];
    }
?>

<!doctype html>
<html lang="en">

<head>
  <title>Update Tutor </title>
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
  <h1 class="display-4" style="text-align:center">Update Participant</h1>
  <div class="">
    <div class="container pd">
      <div class="row col-12">
        <div class="offset-1 col-6">
          <form action="" method="post">
            <div class="form-group my-2">
              <label for="Name" style="color: white;">Name:</label>
              <input type="text" name="name" class="form-control" placeholder="Name" id="Name" required=""
                value="<?php echo $name?>">
            </div>
            <div class="form-group my-2">
              <label style="color: white;"> Gender : </label> &nbsp
              <input type="radio" id="male" name="gender" value="male" required="">
              <label for="male" style="color: white;"> Male </label> &nbsp
              <input type="radio" id="female" name="gender" value="female" required="">
              <label for="female" style="color: white;"> Female </label><br>
            </div>
            <div class="form-group my-2">
              <label style="color: white;">Age :</label>
              <input type="number" name="age" class="form-control" required="" placeholder="Age"
                value="<?php echo $age ?>">
              <br>
            </div>
            <div class="form-group my-2">
              <label for="numb" style="color: white;"> Contact :</label>
              <input type="number" name="contact" class="form-control" placeholder="Phone Number" max="9999999999"
                id="numb" required="" value="<?php echo $contact ?>">
            </div>
            <div class="form-group my-2">
              <label for="numb" style="color: white;"> City:</label>
              <input type="text" name="city" class="form-control" placeholder="city" id="city" required=""
                value="<?php echo $city?>">
            </div>
            <div class="form-group my-2">
               <label style="color: white;">Registered date : </label>
              <input type="text" name="r_d" class="form-control" value="<?php echo date("yy-m-d");?>" required=""
                readonly>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-2">Update Tutor</button>
          </form>
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
    </div> -->
    <!-- Copyright -->
    <!-- <div class="footer-copyright text-center py-3">© 2020 Copyright
    </div> -->
    <!-- Copyright -->

  <!-- </footer> -->
  <!-- CSS only -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
</body>

</html>


<?php
    if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"some");
        $query = "update participant set name = '$_POST[name]', gender = '$_POST[gender]', age = $_POST[age], contact = $_POST[contact], city = '$_POST[city]', r_d = '$_POST[r_d]' where par_id = $_GET[id]";
        $query_run = mysqli_query($connection,$query);

    ?>
<script type="text/javascript">
alert("Participant updated successfully...");
window.location.href = "ashow_Participant.php";
</script>

<?php

    }
?>