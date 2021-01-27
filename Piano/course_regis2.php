<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add tutors</title>
  <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/style.css">
</head>

<body style="background-image: url('piano2.jpg'); color: white;">
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
  <div class="parallax" style="
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-blend-mode: screen;
    /* background-color: rgb(241, 185, 178);*/ min-height: 750px;">
    <h1 class="display-4 pt-2" style="text-align:center;font-weight:500">Add Courses</h1>
    <div class="">
      <div class="container pd">
        <div class="row col-12">
          <div class="offset-1 col-6">
            <form action="" method="POST">
              <div class="form-group my-2">
                <label for="Name" style="font-weight:500;font-size:20px"> Course Name:</label>
                <input type="text" name="course" class="form-control" placeholder="Name" id="course" required="">
              </div>
              <label for="fees" style="font-weight:500;font-size:20px"> Course Fees:</label>
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">₹</span>
                <input type="number" class="form-control" placeholder="Fees" name="fees"
                  aria-describedby="addon-wrapping" id="fees">
              </div>
               <label style="font-weight:500;font-size:20px">Batch:</label>
              <select class="form-select" aria-label="Default select example" name="batch" id="batch">
                <option selected>Batch:</option>
                <option value="Morning Batch">Morning Batch</option>
                <option value="Afternoon Batch">Afternoon Batch</option>
                <option value="Full Day">Full Day</option>
              </select>
              <button type="submit" name="submit" class="btn btn-primary btn-lg mt-2">Add Course</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
</body>

</html>

<?php
    if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"some");
        $query = "insert into courses values(null,'$_POST[course]','$_POST[fees]','$_POST[batch]')";
        $query_run = mysqli_query($connection,$query);
    ?>
<script type="text/javascript">
alert("tutor added successfully!!!");
window.location.href = "ashow_partutors.php";
</script>
<?php
    }
?>