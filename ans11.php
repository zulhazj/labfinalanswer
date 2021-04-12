<?php

  $connection = mysqli_connect("localhost", "root", "", "labfinal");
    
  if ( $connection ){
    //echo "We are Connected with the DataBase";
  }
  else{
    die("Connection Failed " . mysqli_error($connection) );
  }
ob_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >

    <title>Login System!</title>
  </head>
  <body>
    <center><h1>This is User's Registration </h1></center>
    <section class="container p-5 bg-light">
        <div class="col-md-4">
          <h3 class="mb-4 text-info">Add users</h3>
          <form method="POST">
            <div class="form-group">
              <label for="inputAddress">Full Name</label>
              <input type="text" required class="form-control" name="reg_name" id="inputAddress" placeholder="Name">
            </div>
            <div class="form-group ">
              <label for="inputEmail4">Student ID</label>
              <input type="text" required class="form-control" name="reg_id" id="inputEmail4" placeholder="Student ID">
            </div>
            <div class="form-group ">
              <label for="inputEmail4">Age</label>
              <input type="number" required class="form-control" name="reg_age" id="inputEmail4" placeholder="Age">
            </div>
            <div class="form-group">
              <label for="inputAddress">User Name</label>
              <input type="text" required class="form-control" name="reg_unam" id="inputAddress" placeholder="User Name">
            </div>
            <div class="form-group">
              <label for="inputPassword4">Password</label>
              <input type="password" required class="form-control" name="reg_pass" id="inputPassword4" placeholder="Password">
            </div>
            
            <input type="submit" name="register" value="Register" class="btn btn-primary">
          </form>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>

<?php

if (isset($_POST['register'])) {
    $reg_name   = $_POST['reg_name']; 
    $reg_id     = $_POST['reg_id']; 
    $reg_age    = $_POST['reg_age']; 
    $reg_unam   = $_POST['reg_unam']; 
    $reg_pass   = $_POST['reg_pass']; 

    $query = "INSERT INTO users (name, stu_id, age, user_name,  pass) VALUES ( '$reg_name', '$reg_id', '$reg_age', '$reg_unam', '$reg_pass')";

      $add_new_user = mysqli_query($connection, $query);

      if ( !$add_new_user ){
        die("Query Failed ". mysqli_error($connection));
      }
      else{
       header("Location: index.php");
      }

}

  

ob_end_flush();
?>





    
  </body>
</html>