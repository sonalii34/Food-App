<?php
session_start();

if (!isset($_SESSION['search_results'])) {
    echo "No search results available.";
    exit();
}

$restaurants = $_SESSION['search_results'];
$dish_name = $_SESSION['dish_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <!-- Bootstrap CSS -->
 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .restaurant-item img {
            width: 100%;
            height: auto;
            max-height: 200px;
            object-fit: cover;
        }
        .restaurant-item {
            margin-bottom: 20px;
        }
        /* custom.css */

/* Set the height of the navbar */
.navbar {
    height: 60px; /* Adjust this value as needed */
    line-height: 60px; /* Adjust this value as needed */
    padding: 0; /* Ensure there's no extra padding */
}

/* Align items vertically */
.navbar-brand, 
.navbar-nav .nav-link {
    line-height: 60px; /* Ensure items align vertically */
}

/* Prevent the navbar collapse from affecting height */
.navbar-collapse {
    height: auto; /* Auto height to prevent collapse affecting height */
}

/* Optionally, reduce padding for navbar items */
.navbar-nav .nav-item {
    padding: 0 10px; /* Adjust as needed */
}

    </style>
</head>
<body>
<header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/cheff.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="how_to_login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="how_to_register.php" class="nav-link active">Register</a> </li>';
							}
						else
							{

									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                                   
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>

        </header> <!--data-image-src="images/img/dp.png" -->

    <div class="container">
        <h3 class="my-4">Restaurants serving "<?php echo htmlspecialchars($dish_name); ?>"</h3>
        <div class="row">
            <?php foreach ($restaurants as $restaurant): ?>
                <div class="col-md-4 col-sm-6 restaurant-item">
                    <div class="card">
                        <img src="admin/Res_img/<?php echo htmlspecialchars($restaurant['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($restaurant['restaurant_name']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($restaurant['restaurant_name']); ?></h5>
                            <a href="dishes.php?res_id=<?php echo $restaurant['restaurant_id']; ?>" class="btn btn-primary">View Menu</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    
    

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>
</html>

<?php
// Clear the session data after displaying the results
unset($_SESSION['search_results']);
unset($_SESSION['dish']);
?>