<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Piano academy</title>
  <!-- bootstrap link -->
  <script src="https://kit.fontawesome.com/751afc7438.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/newStyle.css">
</head>

<body>
  <nav class="navbar navbar-dark navbar-expand-sm " style="background-color: #323232;">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="logo.png" alt="logo" class="rounded-circle border" height="60"
          width="60">
        Piano academy</a>
      <ul class="nav navbar-nav navbar navbar-right">
        <li class="nav-item active"><a type="button" class="nav-link btn" href="index.php"><span
              class="fa fa-sign-in fa-lg"></span>User Login </a></li>
        <li class="nav-item "><a type="button" class="nav-link btn" href="admin_login.php"><span
              class="fa fa-sign-in fa-lg "></span>Admin Login </a></li>
      </ul>
    </div>
  </nav>
  <div id="image" class="p-5" style="background:url(piano2.jpg) no-repeat center fixed;min-height: 700px;">
    <div class="container pd">
      <div class="row col-12">
        <div class="offset-1 col-6">
          <h5 style="color:black;">Admin login</h5> <br>
          <form action="" method="post">
            <div class="form-group">
              <label for="userid" style="color:black;">User Id :</label>
              <input type="text" name="Email" class="form-control" placeholder="Enter Email" required="">
            </div>
            <div class="form-group my-2">
              <label for="password" style="color:black;"> Password :</label>
              <input type="password" name="Password" class="form-control" placeholder="Enter Password" required>
            </div>
            <button type="submit" name="Login" class="btn btn-danger btn-lg my-2"> Admin Login</button>
          </form>
        </div>
      </div>

      <?php
                session_start();
                if(isset($_POST['Login']))
                {
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"some");
                    $query = "select * from admin where mail = '$_POST[Email]'";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        if($row['mail'] == $_POST['Email'])
                        {
                            if ($row['password'] == $_POST['Password']) 
                            {
                                $_SESSION['Email'] = $row['mail'];
                                header("Location: admin_dashboard.php");
                            }
                        
                            else
                            {
                            ?>
      <div class="alert alert-danger" role="alert">
        Wrong Entry—check it out!
      </div>
      <?php
                            }
                        }
                        
                    }
                }
            ?>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
</body>

</html>