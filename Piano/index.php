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

<body style="background: url(piano.jpg);">
  <nav class="navbar navbar-dark navbar-expand-sm" style="background-color: #323232;">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="logo.png" alt="LOGO" class="rounded-circle border" height="60"
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

  
  <div id="image" class="p-5">
    <div class="container hg p-2">
      <div class="row col-12">
        <div class="offset-1 col-6">
          <h5 style="color:white">User login</h5> <br>
          <form action="" method="post">
            <div class="form-group">
              <label for="userid" style="color:white">Enter Email :</label>
              <input type="text" name="mail" class="form-control" placeholder="Enter Email" required="">
            </div>
            <div class="form-group my-2">
              <label for="password" style="color:white"> Password :</label>
              <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <button type="submit" name="login" class="btn btn-success btn-lg my-1">Login</button>
          </form>
        </div>
        <?php
                session_start();
                if(isset($_POST['login']))
                {
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"some");
                    $query = "select * from users where mail = '$_POST[mail]'";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        if($row['mail'] == $_POST['mail'])
                        {
                            if ($row['password'] == $_POST['password']) 
                            {
                                $_SESSION['mail'] = $row['mail'];
                                header("Location: pin.html");
                            }
                        
                            else
                            {
                            ?>
        <div class="alert alert-danger" role="alert">
          Wrong Entry—please Try Again!
        </div>
        <?php
                            }
                        }
                        
                    }
                }
            ?>
        <div class="offset-1 col-6 pd">
          <a type="button" class="btn btn-danger btn-lg" href="admin_login.php"> Admin Login</a> &nbsp &nbsp
          <a type="button" class="btn btn-warning btn-lg" href="register_User.php"> New User Sign Up</a>
        </div>
      </div>
    </div>

  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
</body>

</html>