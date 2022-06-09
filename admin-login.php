<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="gymlogo.png">
<style>
  h3{
    color: #0374BE;
  }
  body {
    background: #007bff;
    background: linear-gradient(to right, #0062E6, #33AEFF);
  }
  
  .btn-login {
    font-size: 0.9rem;
    letter-spacing: 0.05rem;
    padding: 0.75rem 1rem;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
        <form action="AddAdmininfo.php">
            <h3 class="text-center mb-3 fs-3">GYM Management System</h3>
            <h3 class="text-center mb-5 fs-5">Admin Login</h3>
            <div class="form-floating mb-3">
                <input type="Email" required class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address*</label>
              </div>
              <div class="form-floating mb-3">
                <input type="Password" required class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password*</label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Login</button><hr>
              </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>