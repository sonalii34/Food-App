<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
$owner_id=$_SESSION["owner_id"];
if(empty($_SESSION["owner_id"]))
{
	header('location:../owner_login.php');
}
else
{
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Owner Panel</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header">

    
    
    <div id="main-wrapper">
     
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">

            <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        
                        <span><img src="images/icn.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>

                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                    </ul>
                      
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/user-icn.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
      
        <div class="left-sidebar">
   
            <div class="scroll-sidebar">
       
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-label">Log</li>
                        <li> <a href="all_users.php">  <span><i class="fa fa-user f-s-20 "></i></span><span>Users</span></a></li>
                        
                       <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_menu.php">All Menues</a></li>
								<li><a href="add_menu.php">Add Menu</a></li>
                              
                                
                            </ul>
                        </li>
						 <li> <a href="all_orders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Orders</span></a></li>
                         
                    </ul>
                </nav>
            
            </div>
           
        </div>
    
       
        <div class="page-wrapper">
        
            <div class="container-fluid">
                       
                 <div class="col-lg-12">

                     <div class="card card-outline-primary ">

                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Owner Dashboard</h4>
                            </div>

                            <!--------------------------------------  1st row   ----------------------------------->

                 <div class="row">
            
					 <div class="col-md-4">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-cutlery f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                <h2><?php 
                                $sql = "SELECT COUNT(*) AS dish_count
                                FROM dishes d
                                INNER JOIN restaurant r ON d.res_id = r.rs_id
                                WHERE r.ow_id = ?";
                        
                        // Prepare the statement
                        $stmt = $db->prepare($sql);
                        
                        // Bind parameters
                        $stmt->bind_param('i', $owner_id);
                        
                        // Execute the query
                        $stmt->execute();
                        
                        // Bind the result variables
                        $stmt->bind_result($dish_count);
                        
                        // Fetch the result
                        $stmt->fetch();
                        
                        // Close the statement
                        $stmt->close();
                        
                        // Output the total number of dishes
                        echo $dish_count;
                                ?></h2>
                                    <p class="m-b-0">Dishes</p>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-md-4">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-users f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php $sql="select * from users";
												$result=mysqli_query($db,$sql); 
													$rws=mysqli_num_rows($result);
													
													echo $rws;?></h2>
                                    <p class="m-b-0">Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-md-4">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <span><i class="fa fa-shopping-cart f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php
                                        $sql = "SELECT COUNT(*) AS order_count
                                        FROM users_orders u
                                        INNER JOIN restaurant r ON u.res_id = r.rs_id
                                        WHERE r.ow_id = ?";
                                
                                // Prepare the statement
                                $stmt = $db->prepare($sql);
                                
                                // Bind parameters
                                $stmt->bind_param('i', $owner_id);
                                
                                // Execute the query
                                $stmt->execute();
                                
                                // Bind the result variables
                                $stmt->bind_result($order_count);
                                
                                // Fetch the result
                                $stmt->fetch();
                                
                                // Close the statement
                                $stmt->close();
                                
                                // Output the total number of dishes
                                echo $order_count;

                                    ?></h2>
                                    <p class="m-b-0">Total Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>	

                </div>  
<!--------------------------------------  2nd row   ----------------------------------->
           <div class="row">
                    <div class="col-md-4">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <span><i class="fa fa-spinner f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php
                                    $sql = "SELECT COUNT(*) AS process_order
                                        FROM users_orders u
                                        INNER JOIN restaurant r ON u.res_id = r.rs_id
                                        WHERE r.ow_id = ? And u.status='in process' ";
                                
                                // Prepare the statement
                                $stmt = $db->prepare($sql);
                                
                                // Bind parameters
                                $stmt->bind_param('i', $owner_id);
                                
                                // Execute the query
                                $stmt->execute();
                                
                                // Bind the result variables
                                $stmt->bind_result($process_order);
                                
                                // Fetch the result
                                $stmt->fetch();
                                
                                // Close the statement
                                $stmt->close();
                                
                                // Output the total number of dishes
                                echo $process_order;

                                    ?>
                                    </h2>
                                    <p class="m-b-0">Processing Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <span><i class="fa fa-check f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php
                                     $sql = "SELECT COUNT(*) AS deliver_order
                                     FROM users_orders u
                                     INNER JOIN restaurant r ON u.res_id = r.rs_id
                                     WHERE r.ow_id = ? And u.status='closed' ";
                             
                             // Prepare the statement
                             $stmt = $db->prepare($sql);
                             
                             // Bind parameters
                             $stmt->bind_param('i', $owner_id);
                             
                             // Execute the query
                             $stmt->execute();
                             
                             // Bind the result variables
                             $stmt->bind_result($deliver_order);
                             
                             // Fetch the result
                             $stmt->fetch();
                             
                             // Close the statement
                             $stmt->close();
                             
                             // Output the total number of dishes
                             echo $deliver_order;
                                    
                                    ?></h2>
                                    <p class="m-b-0">Delivered Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-4">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle"> 
                                    <span><i class="fa fa-times f-s-40" aria-hidden="true"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php 
                                    $sql = "SELECT COUNT(*) AS cancel_order
                                    FROM users_orders u
                                    INNER JOIN restaurant r ON u.res_id = r.rs_id
                                    WHERE r.ow_id = ? And u.status='rejected' ";
                            
                            // Prepare the statement
                            $stmt = $db->prepare($sql);
                            
                            // Bind parameters
                            $stmt->bind_param('i', $owner_id);
                            
                            // Execute the query
                            $stmt->execute();
                            
                            // Bind the result variables
                            $stmt->bind_result($cancel_order);
                            
                            // Fetch the result
                            $stmt->fetch();
                            
                            // Close the statement
                            $stmt->close();
                            
                            // Output the total number of dishes
                            echo $cancel_order;
                                   
                                   
                                    ?></h2>
                                    <p class="m-b-0">Cancelled Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>

                 </div>


            </div>
                       

          </div>  <!-- col lg 12-->
    
                
                </div>

         </div>

    </div>
   
    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>

</body>

</html>
<?php
}
?>