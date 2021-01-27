<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Courses</title>
  <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/style.css">
</head>

<body style="background-image: url('piano1.jpg'); color: white;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; min-height: 750px;">
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
                <label for="course" style="font-weight:500;font-size:20px"> Course Name:</label>
                <input type="text" name="course" class="form-control" placeholder="Name" id="course" required="">
              </div>
              <label for="fees" style="font-weight:500;font-size:20px"> Course Fees:</label>
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">₹</span>
                <input type="number" class="form-control" placeholder="Fees" name="fees"
                  aria-describedby="addon-wrapping" id="fees">
              </div><br>
               <label style="font-weight:500;font-size:20px">Batch:</label>
              <select class="form-select" aria-label="Default select example" name="batch" id="batch">
                <option selected>Batch:</option>
                <option value="Morning Batch">Morning Batch</option>
                <option value="Afternoon Batch">Afternoon Batch</option>
                <option value="Full Day">Full Day</option>
              </select>
               <div class="form-group mt-4" style="font-weight:500;font-size:20px">
                <label for="name">Student Name :</label>
                <select class="form-control" name="name" id="name">
                  <option>-Select Student-</option>
                  <?php
                            $connection = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($connection,"some");
                            $query = "select name from participant";
                            $query_run = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>
                  <option><?php echo $row['name'];?></option>
                  <?php
                            }
                        ?>
                </select>
              </div>
              <div class="form-group mt-4">
                <label for="c_name" style="font-weight:500;font-size:20px">Assign tutors :</label>
                <select class="form-control" name="c_name" id="c_name">
                  <option>-Select tutors here-</option>
                  <?php
                            $connection = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($connection,"some");
                            $query = "select c_name from tutors";
                            $query_run = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>
                  <option><?php echo $row['c_name'];?></option>
                  <?php
                            }
                        ?>
                </select> 
              </div>
              <div class="form-group mt-4">
                <label for="mail" style="font-weight:500;font-size:20px">Select User Email:</label>
                <select class="form-control" name="mail" id="mail">
                  <option>-Select User with mail-</option>
                  <?php
                            $connection = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($connection,"some");
                            $query = "select mail from users";
                            $query_run = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>
                  <option><?php echo $row['mail'];?></option>
                  <?php
                            }
                        ?>
                </select> <br>
              </div>
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
        $query = "insert into courses values(null,'$_POST[course]','$_POST[fees]','$_POST[batch]','$_POST[name]','$_POST[c_name]','$_POST[mail]')";
        $query_run = mysqli_query($connection,$query);
    ?>
<script type="text/javascript">
alert("tutor added successfully!!!");
window.location.href = "ashow_partutors.php";
</script>
<?php
    }
?>