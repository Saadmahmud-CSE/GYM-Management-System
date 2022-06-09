<?php include 'connection.php'; ?>
<?php
    $str="SELECT Username from admin";
    $q=mysqli_query($conn, $str);
?>
<?php
    $aid = $_REQUEST['aid'];
    $s = "SELECT * FROM admin WHERE ID=$aid";
    $q1 = mysqli_query($conn, $s);
    $r1 = mysqli_fetch_array($q1);
?>
<?php
    if(ISSET($_POST['submit'])){
        $name=$_POST['Username'];
        $email=$_POST['Email'];

        $str="UPDATE admin SET Username='$name',Email='$email' WHERE ID='$aid'";
        
        if(mysqli_query($conn,$str)){
            header('Location: AdminInfoTable.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Info Edit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                        <a class="navbar-brand" href="#">Admin Information Edit</a>
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
                                <li><a class="dropdown-item" href="MemberInfoTable.php">Information</a></li>
                                <li><a class="dropdown-item" href="AddMemberinfo.php">Add</a></li>
                            </ul>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="welcome.php">Logout</a>
                            </li>
                        </ul>
                        </form>
                        </div>
                    </div>
                </nav>
            <form method="POST" action="">
                <div class="mb-3 mt-3">
                    <label for="">Enter Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $r1['Username']?>" placeholder="Enter Username" id="">
                </div>

                <div class="mb-3">
                    <label for="">Enter Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $r1['Email']?>" placeholder="Enter Email" id="">
                </div>

                <?php if ($str == true): ?>
                    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
                <?php else: ?>
                    <button class="btn" type="submit" name="save" >Save</button>
                <?php endif ?>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
</body>
</html>