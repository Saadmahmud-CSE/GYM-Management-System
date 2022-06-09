<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="icon" href="gymlogo.png">
<style>
    body {
        font: 400 1.4rem 'Lato', Verdana, Helvetica, sans-serif;
    }
    .btn-change{
        height: 80px;
        width: 250px;
        background: #318f60;
        margin: 20px;
        float: left;
        border:0px;
        color:#fff;
        box-shadow: 0 0 1px #ccc;
        -webkit-transform-origin: 50% 50%;
        -webkit-transition-duration: 0.5s;
        -webkit-transition-timing-function: ease-out;
        -webkit-box-shadow: 150px 0px 0 0 lightseagreen inset , -150px 0px 0 lightseagreen inset;
    }
    .btn-change:hover{
        -webkit-box-shadow: 0px 0px 0 0 lightseagreen inset , 0px 0px 0 lightseagreen inset;
    }

    .container{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #bd{
        height: 100vh;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
    h1{
            text-align: center;
            color: #0374BE;
    }
</style>
</head>
<body id="bd">
<div class="container">
    <h1>GYM Management System</h1><br>
	<div class="row">
        <a href="admin-login.php"><button class="btn-change"><h3>Login As Admin</h3></button></a></br>
        <a href="staff-login.php"><button class="btn-change"><h3>Login As Staff</h3></button></a>
	</div>
</div>
</body>
</html>