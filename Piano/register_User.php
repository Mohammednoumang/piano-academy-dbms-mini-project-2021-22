<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title style="color:white;">Piano academy</title>
  <!-- bootstrap link -->
  <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/newStyle.css">
</head>

<body style="background:url(piano.jpg);">
  <nav class="navbar navbar-dark navbar-expand-sm " style="background-color: #323232;">
    <div class="container">
     <a class="navbar-brand" href=""><img src="logo.png" alt="LOGO" class="rounded-circle border" height="60"
          width="60">
        Piano academy</a>
      <ul class="nav navbar-nav navbar navbar-right">
        <li class="nav-item active"><a type="button" class="nav-link btn" href="index.php"><span
              class="fa fa-sign-in fa-lg "></span>User Login </a></li>
        <li class="nav-item "><a type="button" class="nav-link btn" href="admin_login.php"><span
              class="fa fa-sign-in fa-lg "></span>Admin Login </a></li>
      </ul>
    </div>
  </nav>

 

  <div id="image" class="p-5" style="min-height: 650px;">
    <div class="container pd">
      <div class="row col-12">
        <div class="offset-1 col-6">
          <h5 style="color:white">Sign up</h5> <br>
          <form action="" method="post">
            <div class="form-group">
              <label for="userid" style="color:white">Enter Email :
                </label>
                
              <input type="text" name="Email" class="form-control" placeholder="Enter email" required="">
            </div>
            <div class="form-group my-2">
              <label for="userid" style="color:white">User Name :</label>
              <input type="text" name="name" class="form-control" placeholder="User Name" required>
            </div>
            <div class="form-group my-2">
              <label for="password" style="color:white"> Password :</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-lg mt-2">Sign up</button>
          </form>
        </div>
      </div>
    </div>
  </div>

 <!--  <footer class="footer">
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
<!-- 
  </footer> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
</body>

</html>


<?php
    if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"some");
        $query = "insert into users values(null,'$_POST[Email]','$_POST[name]','$_POST[password]')";
        $query_run = mysqli_query($connection,$query);
    ?>
<script type="text/javascript">
alert("User added successfully...");
window.location.href = "index.php";
</script>
<?php
    }
?>