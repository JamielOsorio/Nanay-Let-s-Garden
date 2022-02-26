<?php
    include 'Header.php';
?>
  
  <body>
    <div class="parent">
      <div class="container">
          
        <?php
            include 'Carousel.php';
        ?>

        <div class="inner-container">
        <!-- ============START OF NAVABR ============ -->

          <?php
            include 'Navbar.php';
          ?>
          
         <!-- !!!!!change role to type -->
          <!-- ===========START OF ITEMS=============-->
            <section class="content-section ItemContainer">
              <h2 class="section-header">ITEMS</h2>
              <div class="shop-items">
                <div class="shop-item">
                  <span class="shop-item-title">Gardening Pot</span>
                  <img class="shop-item-image" src="resources/pot.png" alt="">
                  <div class="shop-item-details">
                    <span class="shop-item-price">₱200</span>
                    <?php
                      if (isset($_SESSION["useruid"])) {
                        echo '<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>';
                      }
                      else {
                        echo "<button class='btn btn-primary' type='button' onclick='sendTologreg()'>ADD TO CART</button>";
                      }
                    ?>
                  </div>
                </div>

                <div class="shop-item">
                  <span class="shop-item-title">Gardening Shovel</span>
                  <img class="shop-item-image" src="resources/gardeningshovel.png" alt="">
                  <div class="shop-item-details">
                    <span class="shop-item-price">₱220</span>
                    <?php
                      if (isset($_SESSION["useruid"])) {
                        echo '<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>';
                      }
                      else {
                        echo "<button class='btn btn-primary' type='button' onclick='sendTologreg()'>ADD TO CART</button>";
                      }
                    ?>
                  </div>
                </div>

                <div class="shop-item">
                  <span class="shop-item-title">Green Snake Plant</span>
                  <img class="shop-item-image" src="resources/greensnakeplant.jpg" alt="">
                  <div class="shop-item-details">
                    <span class="shop-item-price">₱2300</span>
                    <?php
                      if (isset($_SESSION["useruid"])) {
                        echo '<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>';
                      }
                      else {
                        echo "<button class='btn btn-primary' type='button' onclick='sendTologreg()'>ADD TO CART</button>";
                      }
                    ?>
                  </div>
                </div>

                <!-- <div class="shop-item">
                  <span class="shop-item-title">Dendrobium Thongchai <br> Gold</span>
                  <img class="shop-item-image" src="resources/dendrobium thongchai gold.png" alt="">
                  <div class="shop-item-details">
                    <span class="shop-item-price">₱755</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                  </div>
                </div> -->

                <div class="shop-item">
                  <span class="shop-item-title">Monstera deliciosa</span>
                  <img class="shop-item-image" src="resources/Monstera deliciosa L.jpg" alt="">
                  <div class="shop-item-details">
                    <span class="shop-item-price">₱4200</span>
                    <?php
                      if (isset($_SESSION["useruid"])) {
                        echo '<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>';
                      }
                      else {
                        echo "<button class='btn btn-primary' type='button' onclick='sendTologreg()'>ADD TO CART</button>";
                      }
                    ?>
                  </div>
                </div>

                <div class="shop-item">
                  <span class="shop-item-title">Ficus Audrey</span>
                  <img class="shop-item-image" src="resources/ficus audrey.jpg" alt="">
                  <div class="shop-item-details">
                    <span class="shop-item-price">₱5900</span>
                    <?php
                      if (isset($_SESSION["useruid"])) {
                        echo '<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>';
                      }
                      else {
                        echo "<button class='btn btn-primary' type='button' onclick='sendTologreg()'>ADD TO CART</button>";
                      }
                    ?>
                  </div>
                </div>

                <div class="shop-item">
                  <span class="shop-item-title">Rhaphidophora<br>tetrasperma</span>
                  <img class="shop-item-image" src="resources/Rhaphidophora tetrasperma.jpg" alt="">
                  <div class="shop-item-details">
                    <span class="shop-item-price">₱1300</span>
                    <?php
                      if (isset($_SESSION["useruid"])) {
                        echo '<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>';
                      }
                      else {
                        echo "<button class='btn btn-primary' type='button' onclick='sendTologreg()'>ADD TO CART</button>";
                      }
                    ?>
                  </div>
                </div>

              </div>
            </section>
    <!-- cart -->
            <section class="ItemContainer content-section">
              <h2 class="section-header">CART</h2>
              <div class="cart-row">
                <span class="cart-header cart-column cart-item">ITEM</span>
                <span class="cart-header cart-column cart-price">PRICE</span>
                <span class="cart-header cart-column cart-quantity">QUANTITY</span>
              </div>

              <div class="cart-items">
                
              </div>
              
              <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">₱0</span>
              </div>

                
                <?php
                      if (isset($_SESSION["useruid"])) {
                        echo '<button class="btn btn-primary btn-purchase" role="button">PURCHASE</button>';
                      }
                      else {
                        echo '<button class="btn btn-primary btn-notpurch" role="button" onclick="sendTologreg()">PURCHASE</button>';
                      }
                ?>

            </section>
        </div>
        <!-- ===========END OF ITEMS=========== -->

        <?php
          include 'footer.php';
        ?>

      </div>
    </div>
  </body>
</html>
