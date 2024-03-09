<?php
include '../../backend/prosignup.php';
?>

<!DOCTYPE html>  
<html lang="en">  
<head>  
  <meta charset="UTF-8">  
  <title>SignUp Form</title>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
  <link rel="stylesheet" href="../css/signup.css">  
</head>  
<body>  
  <?php require '../../backend/prosignup.php' ?>
  <?php
  if(isset($_GET['error'])) {
    echo'
    <div class="alert alert-danger" role="alert">
    Error! User already exists.
    </div>';
  }
?>
  <div class="pt-5">  
    <h1 class="text-center">SignUp</h1>  
    <div class="container">  
      <div class="row">  
        <div class="col-md-5 mx-auto">  
          <div class="card card-body">  
            <form id="submitForm" action="../../backend/prosignup.php" method="POST" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1">  
              <input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">  
              <div class="form-group required">  
                <label for="fullname">Full Name</label>  
                <input type="text" class="form-control" id="fullname" required="" name="fullname" value="">  
              </div>                      
              <div class="form-group required">  
                <label for="email">Email Address</label>  
                <input type="email" class="form-control" required="" id="email" name="email" value="">  
              </div>  
              <div class="form-group required">  
                <label for="password">Password</label>  
                <input type="password" class="form-control" required="" id="password" name="password" value="">  
              </div>  
              <div class="form-group pt-1">  
                <button class="btn btn-primary btn-block" type="submit">Sign Up</button>  
              </div>  
            </form>  
            <p class="small-xl pt-3 text-center">  
              <span class="text-muted">Already a member?</span>  
              <a href="#">Log in</a>  
            </p>  
          </div>  
        </div>  
      </div>  
    </div>  
  </div>  
</body>  
</html>
