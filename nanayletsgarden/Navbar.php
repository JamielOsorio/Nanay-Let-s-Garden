<div class="nav-bar">
    <div class="Shop-name">Nanay Let's Garden</div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
    <div class="nav-bar-links">
      <ul>
        <li><a href="HomePage.php">Home</a></li>
        <li><a href="OrderPage.php">Order</a></li>
        <?php
          if (isset($_SESSION["useruid"])) {
            echo "<li><a href='Profile.php'>Profile</a></li>";
            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
          }
          else {
            echo "<li><a href='LogReg.php' class='show'onclick=document.getElementById('login').style.display='block' style='width:auto;'>Login/Register</a></li>";
          }
        ?>
        
      </ul>
    </div>
</div>