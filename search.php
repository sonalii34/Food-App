<?php
include("connection/connect.php");  



// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$emoji_mapping = [
    '🍕' => 'Pizza',
    '🍔' => 'Burger',
    '🍣' => 'Sushi',
    '🥗' => 'Salad',
    '🍝' => 'Pasta'
];

if (isset($_GET['dish'])) {
    $dish = $db->real_escape_string($_GET['dish']);
   

    $sql = "SELECT restaurant.rs_id AS restaurant_id, restaurant.title AS restaurant_name, restaurant.image
    FROM dishes 
    JOIN restaurant ON dishes.res_id = restaurant.rs_id 
    WHERE dishes.title LIKE '%$dish%'";

   
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Store results in an array
        $restaurants = [];
        while ($row = $result->fetch_assoc()) {
            $restaurants[] = $row;
        }
        
        // Pass the results to a results page for display
        session_start();
        $_SESSION['search_results'] = $restaurants;
        $_SESSION['dish_name'] = $dish;
        header("Location: navbar.php");
    } 
    else {
        echo "No restaurants found for the dish: $dish";
    }
}

?>
