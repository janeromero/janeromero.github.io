<nav class="navbar navbar-custom" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle x collapsed" data-toggle="collapse" data-target="#navbar-collapse-x" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="padding: 0" class="navbar-brand" href="index.php"><img style="max-height: 100%" alt="logo" src="assets/images/logoclearhor.png"></a>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-x">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="#">Game Schedule</a></li>
        <li><a href="statistics.php">Statistics</a></li>
        <li><a href="catalog.php">Merchandise</a></li>
      </ul>

      <?php

        if (isset($_SESSION['current_user'])) {

          if ($_SESSION['role'] == 'admin') {
            echo '
            <ul class="nav navbar-nav">
              <li><a href="#">Settings</a></li>
            </ul>
            ';
          }
        }
        
        
        ?>

      <?php

        if (isset($_SESSION['current_user'])) {
          echo '
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="logout.php">Logout</a>
            </li>
          </ul>
          ';
        } else {
          echo '
          <ul class="nav navbar-nav navbar-right">
            <li><a href="user_login.php">Login</a></li>            
            <li><a href="register.php">Register</a></li>
          </ul>
          ';
        }

        ?>
      </ul>
    </div> <!-- /.collapse -->
  </div> <!-- /.container-fluid -->
</nav>







