<?php
  include_once('sql/user.php');

  $user = getUser($_SESSION['username']);

?>
  <h2> <?=$user['username'] ?></h2>
  <article id="artic_edit_user">
    <form id="editUser" method="post">
      <ul>
        <li><label><span>Type of user:</span></label>
            <label><input type="radio" name="user_type" value="owner" <?= $user['is_owner'] ? "checked" : "";?> > Owner </label>
            <label><input type="radio" name="user_type" value="reviewer" <?= $user['is_reviewer'] ? "checked" : "";?> > Reviewer </label>
        </li>
        <li>
          <span>Name:</span><br><input type="text" id="name" value="<?=$user['name']?>" name="name">
        </li>
        <li>
          <span>UserName:</span><br><input type="text" id="username" value="<?=$user['username']?>" name="username" disabled>
        </li>
        <li>
          <span>Password:</span><br><input type="password" id="password" placeholder="Your password" name="password">
        </li>
        <li>
          <span>Email:</span><br><input type="email" id="email" value="<?=$user['email']?>" name="email">
        </li>
        <li>
          <span>Location:</span><br><input type="text" id="location" value="<?=$user['location']?>" name="location">
        </li>
        <li>
          <span>Nationality:</span><br><input type="text" id="nationality" value="<?=$user['nationality']?>" name="nationality">
        </li>
      </ul>
      <button class="css_btn_class" type="button" id="submit_editUser">Update</button>
    </form>
  </article>

  <div id="footRestaurant">
    <a href=index.php> BACK </a>
  </div>

  <script src="script/editUser.js" type="text/javascript"></script>
