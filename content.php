
<h2>Restaurants</h2>
<?php
  include_once('sql/restaurant.php');
/*s
  $stmt = $db->prepare('SELECT * FROM restaurant');
  $stmt->execute();*/

  $result = listRestaurants();

  foreach ($result as $rest){
    echo '<article id="restaurant">';
    echo '<h3>'.$rest['name'].'</h3>';
    echo '<img src="1.gif" alt="Image">';
    echo '<ul><li>Name: '.$rest['name'] .'</li>';
    echo '<li>Location: '.$rest['location'] .'</li>';
    echo '<li>Description: '.$rest['description'] .'</li>';
    echo '<li>Cuisine Type: '.$rest['cuisine_type'] .'</li>';
    echo '<li>Price Range: '.$rest['price_range'] .'</li>';
    echo '</ul>';

    echo '<li><a href="">see more</a></li>';
    echo '<li><a href="">comments (5)</a></li>';
    echo '<li><a href="">share</a></li>';
    echo '</article>';
  }
?>