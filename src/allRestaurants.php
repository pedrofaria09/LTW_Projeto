<script src="script/searchRestaurantLocation.js" type="text/javascript"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="script/autocomplete_location.js" type="text/javascript"></script>

<h2>All Restaurants</h2>
<div id="menu2">
    <ul>
      <li>Search by location:<form id="search_restaurant_location" method="post">
          <label><input type="text" id="restaurant_location" placeholder="Enter a location"></label>
          <button type="button" id="search_rest_loc_submit">Search</button>
      </li></form>
    </ul>
</div>
<?php
  include_once('sql/restaurant.php');

  $result = listRestaurants();

  foreach ($result as $rest){
  ?>
    <article id="restaurant">
    <img src="https://s-media-cache-ak0.pinimg.com/originals/56/29/d5/5629d529bbaf9894b047b0bf031b03bd.jpg" alt="Image">
    <h3><?=$rest['name'] ?></h3>
    <ul><li><span>Name:</span> <?=$rest['name'] ?> </li>
    <li><span>Location:</span> <?=$rest['location'] ?> </li>
    <li><span>Description:</span> <?=$rest['description'] ?> </li>
    <li><span>Cuisine Type:</span> <?=$rest['cuisine_type'] ?> </li>
    <li><span>Price Range:</span> <?=$rest['price_range'] ?> </li>
    <li><span>Average Rating:</span> <?=$rest['avg_rating'] ?> </li>
    </ul>
    </article>

    <div id="footRestaurant">
    <a href=index.php?p=src/viewRestaurant&r=<?=$rest['restaurant_id'] ?> >See More</a>
    </div>
<?php
  }
?>