<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animsition.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100vh;
    }
    .header-scroll {
      position: fixed;
      top: 0;
      width: 100%;
      color: #fff;
      z-index: 1000;
    }
    .login-container {
      text-align: center;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      max-width: 400px;
      width: 100%;
      margin-top: 180px; /* Adjust the margin-top to create space between header and login */
    }
    h1 {
      margin-top: 0;
    }
    .btn-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }
    .btn {
      flex: 1;
      margin: 0 5px;
      color:#fff;
	background-color: #5c4ac7;
    }
  
  </style>
</head>
<body>

<header id="header" class="header-scroll top-header headrom">
  <nav class="navbar navbar-dark">
    <div class="container">
      <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
      <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/icn.png" alt=""> </a>
      <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
        <ul class="nav navbar-nav">
          <li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
          <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li> 
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="login-container">
  <h1>How Do You Want To Register?</h1>
  <div class="btn-container">
    <button class="btn btn-info" onclick="window.location.href='registration.php'">User </button>
    <button class="btn btn-info" onclick="window.location.href='owner_register.php'">Owner </button>
  </div>
</div>

</body>
</html>
