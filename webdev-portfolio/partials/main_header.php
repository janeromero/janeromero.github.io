<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-times"></i></a>
  <div class="logo">
    <a href="index.php"><h4 class="boxed-item">FHBL</h4></a>
  </div> <!-- /.logo -->

  <ul class="navigation-selection list-unstyled">
    <li class="navigation-item"><a href="home.php">Home</a></li>
    <li class="navigation-item"><a href="#">Game Schedule</a></li>
    <li class="navigation-item"><a href="statistics.php">Statistics</a></li>
    <li class="navigation-item"><a href="catalog.php">Products</a></li>
    <li class="navigation-item">
      <a href="cart.php">My Cart
        <?php 

        if (isset($_SESSION['current_user']) && isset($_SESSION['shopping_cart'])) {
          echo '
            <strong style="color:red;">( '.count($_SESSION['shopping_cart']).' )</strong>
            ';
          }
        ?>
      </a>
    </li>
  </ul>

  <?php
    if (isset($_SESSION['current_user'])) {
      if ($_SESSION['role'] == 'admin') {
        echo '
        <ul class="navigation-selection list-unstyled">ADMIN SETTINGS
          <li class="navigation-item"><a href="settings.php">Users</a></li>
          <li class="navigation-item"><a href="#">Costumer Orders</a></li>
          <li class="navigation-item"><a href="create_new_item.php">Add New Merchandise</a></li>
          <li class="navigation-item"><a href="#">Add New Game Schedule</a></li>
          <li class="navigation-item"><a href="#">Add New Game Statistics</a></li>
        </ul>
        ';
      }
    }

  ?>

  <?php

    if (isset($_SESSION['current_user'])) {
      echo '
      <ul class="navigation-selection list-unstyled">
        <li>
          <a href="logout.php">Logout</a>
        </li>
      </ul>
      ';
    } else {
      echo '
      <ul class="navigation-selection list-unstyled">

        <li id="userLogin" data-toggle="modal" data-target="#userLoginModal" data-index="<?php echo $id; ?>"><h4 class="boxed-item boxed-item-smaller"><i class="fa fa-user"></i> Login</h4></a></li>          
        <li><a href="register.php"><h4 class="boxed-item boxed-item-smaller"><i class="fa fa-plus-square-o"></i> Register</h4></a></li>

      </ul>
    ';}
  ?>
  <div class="footer"><p>&copy; 2018 Fantasy Hoops Basketball League. All Rights Reserved | Designed and Powered by Jane Romero</p></div>
</div>

<!-- TOGGLE MENU -->
<span onclick="openNav()"><i class="fa fa-bars toggle-menu"></i></span>

<div class="wrapper" id="main">