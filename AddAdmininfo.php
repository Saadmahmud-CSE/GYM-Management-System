<?php include 'connection.php';

  if(isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $role = $_POST['role'];

      $insert = "insert into admin (
        Username,Email,Password,Role) values('$name', '$email', '$password', '$role')";
        $res = mysqli_query($conn,$insert);

        if($res) {
            ?>
            <script>
                alert("done");
            </script>
            <?php
        }else {
            ?>
            <script>
                alert("try again");
            </script>
            <?php
        }
        header('Location: AdminInfoTable.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="gymlogo.png">
<style>
    h1{
        text-align: center;
        color: #0374BE;
        margin-top: 10px;
    }
    .dropdown-item{
        color: #0374BE;
    }
</style>
</head>
<body>
    <div class="container">
    <h1>GYM Management System</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary mt-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Page</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="AdminInfoTable.php">Information</a></li>
                        <li><a class="dropdown-item" href="AddAdmininfo.php">Add</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Staff
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="StaffInfoTable.php">Information</a></li>
                        <li><a class="dropdown-item" href="AddStaffinfo.php">Add</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Member
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Information</a></li>
                        <li><a class="dropdown-item" href="AddMemberinfo.php">Add</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="welcome.php">Logout</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        <form method="POST" action="">
            <div class="mb-3 mt-3">
                <label for="">Username*</label>
                <input type="username" class="form-control" name="name" placeholder="Enter Username" id="">
            </div>

            <div class="mb-3">
                <label for="">Email*</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" id="">
            </div>

            <div class="mb-3">
                <label for="">Password*</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password" id="">
            </div>

            <div class="mb-3">
                <label for="">Role*</label><br>
                <select name="role">
                    <option value="">Select</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>

            <button type="submit" name="submit" class="mt-3 btn btn-success">Submit</button>
        </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
</body>
</html>