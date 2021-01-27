<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Join to Academy</title>
  <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/style.css">
</head>

<body>
  <nav class="navbar navbar-dark navbar-expand-sm" style="background-color: #323232" ;>
    <div class=" container">
      <a class="navbar-brand" href=""><img src="logo.png" alt="logo" class="rounded-circle border" height="60"
          width="60">
        Piano Academy</a>
      <ul class="nav navbar-nav navbar navbar-right">
        
        <li class="nav-item "><a class="nav-link" href="joinTo.php">Join To Academy</a></li>
        <li class="nav-item "><a class="nav-link" href="coursesFees.php">Courses & Fees</a></li>
        <li class="nav-item "><a class="nav-link btn-pd" href="logout.php"> <i class="fa fa-sign-out fa-lg"></i>
            Logout</a></li> &nbsp
      </ul>
    </div>
  </nav>
  <div id="background" style="
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    /* background-blend-mode: screen; */
    background-image: url('blue_piano.jpg'); /*background-color: rgb(241, 185, 178);*/ min-height: 750px;">
    <h1 class="display-4" style="text-align:center;font-weight:500;color:white;">Registration Form for
      Participants</h1>
    <div class="">
      <div class="container pd">
        <div class="row col-12">
          <div class="offset-1 col-6">
            <form action="" method="POST">
              <div class="form-group my-2">
                <label for="Name" style="font-weight:500;font-size:20px;color:white;">Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Name" id="Name" required="">
              </div>
              <div class="form-group my-2">
                <label for="male" style="font-weight:500;font-size:20px;color:white;"> Gender : </label> &nbsp
                <input type="radio" id="male" name="gender" value="male" required="">
                <label for="female" style="font-weight:500;font-size:20px;color:white;"> Male </label> &nbsp
                <input type="radio" id="female" name="gender" value="female" required="">
                <label for="female" style="font-weight:500;font-size:20px;color:white;"> Female </label><br>
              </div>
              <div class="form-group">
                <label for="age" style="font-weight:500;font-size:20px;color:white;">Age :</label>
                <input type="number" name="age" class="form-control" required="" placeholder="Age" id="age"> <br>
              </div>
              <div class="form-group">
                <label for="city" style="font-weight:500;font-size:20px;color:white;"> Your City:</label>
                <input type="text" name="city" class="form-control" placeholder="your city" id="city" required="">
              </div>
              <div class="form-group my-2">
                <label for="numb" style="font-weight:500;font-size:20px;"> Contact Number:</label>
                <input type="number" name="contact" class="form-control" placeholder="Phone Number" id="numb"
                  max="9999999999" required="">
              </div>
              <div class="form-group">
                <label id="reg" style="font-weight:500;font-size:20px">Registered date : </label>
                <input type="text" name="r_d" class="form-control" value="<?php echo date("yy-m-d");?>" required=""
                  readonly>
              </div> <br>
              <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck" style="font-weight:500;font-size:20px">
                  Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
              <button type="submit" name="submit" class="btn btn-primary btn-lg mt-2">Register</button>
            </form>
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
    <!-- <div class="footer-copyright text-center py-3">© 2020 Copyright -->
    <!-- </div> -->
    <!-- Copyright -->

  <!-- </footer> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
</body>

</html>

<?php
    if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"some");
        $query = "insert into paticipant values(null,'$_POST[name]','$_POST[gender]','$_POST[age]','$_POST[city]','$_POST[contact]', '$_POST[r_d]')";
        $query_run = mysqli_query($connection,$query);
    ?>
<script type="text/javascript">
alert("Paticipant Add Successfully...");
window.location.href = "joinTo.php";
</script>
<?php
    }
?>