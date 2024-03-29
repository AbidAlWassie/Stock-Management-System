<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/default_styles.css">
</head>

<body>

  <div class="order-heading">
    <h1>Orders</h1>
  </div>

  <div class="container">


    <div class="order">
      <form method="POST">

        <!-- <label for="order">Order</label>
        <input type="text" value=""> -->

        <label for="customer">Select a customer:</label>
        <input list="customer" type="text" name="customer_id">
        <datalist id="customer">
          <option selected>None</option>

          <?php
          include("./connect.php");
          error_reporting(0);
          $query = "SELECT * FROM customer";
          $data = mysqli_query($connect, $query);
          $total = mysqli_num_rows($data);

          if ($total != 0) {
            while ($result = mysqli_fetch_assoc($data)) {
              echo
              "
              <option value='$result[Customer_ID]'>" . $result['Customer_Name'] . " | Address: "  . $result['Location'] . " | ID: " .  $result['Customer_ID'] .   "</option>
              ";
            }
          } else {
            echo "No records found";
          }
          ?>
        </datalist>

        <div class="orders-added">

          <!-- 1 -->
          <div class="order-item hide">
            <h4>Item 1</h4>
            <label for="product">Product ID</label>
            <input list="product" type="text" class="half" name="product_1">
            <datalist id="product">
              <option selected>None</option>

              <?php
              include("./connect.php");
              error_reporting(0);
              $query = "SELECT * FROM products";
              $data = mysqli_query($connect, $query);
              $total = mysqli_num_rows($data);

              if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                  echo
                  "
              <option value='$result[Product_ID]'>"  . $result['Brand'] . " | Name: "  . $result['Product_Name'] . " | Color: " .  $result['Color'] . " | Size: " .  $result['Size'] .  " | Quantity: " .  $result['Quantity']  . "</option>
              ";
                }
              } else {
                echo "No records found";
              }
              ?>
            </datalist>

            <label for="product">Quantity</label>
            <input type="text" class="half" name="amount_1">
          </div>


          <!-- 2 -->
          <div class="order-item hide">
            <h4>Item 2</h4>
            <label for="product">Product ID</label>
            <input list="product" type="text" class="half" name="product_2">
            <datalist id="product">
              <option selected>None</option>

              <?php
              include("./connect.php");
              error_reporting(0);
              $query = "SELECT * FROM products";
              $data = mysqli_query($connect, $query);
              $total = mysqli_num_rows($data);

              if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                  echo
                  "
              <option value='$result[Product_ID]'>"  . $result['Brand'] . " | Name: "  . $result['Product_Name'] . " | Color: " .  $result['Color'] . " | Size: " .  $result['Size'] .  " | Quantity: " .  $result['Quantity']  . "</option>
              ";
                }
              } else {
                echo "No records found";
              }
              ?>
            </datalist>

            <label for="product">Quantity</label>
            <input type="text" class="half" name="amount_2">
          </div>


          <!-- 3 -->
          <div class="order-item hide">
            <h4>Item 3</h4>
            <label for="product">Product ID</label>
            <input list="product" type="text" class="half" name="product_3">
            <datalist id="product">
              <option selected>None</option>

              <?php
              include("./connect.php");
              error_reporting(0);
              $query = "SELECT * FROM products";
              $data = mysqli_query($connect, $query);
              $total = mysqli_num_rows($data);

              if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                  echo
                  "
              <option value='$result[Product_ID]'>"  . $result['Brand'] . " | Name: "  . $result['Product_Name'] . " | Color: " .  $result['Color'] . " | Size: " .  $result['Size'] .  " | Quantity: " .  $result['Quantity']  . "</option>
              ";
                }
              } else {
                echo "No records found";
              }
              ?>
            </datalist>

            <label for="product">Quantity</label>
            <input type="text" class="half" name="amount_3">
          </div>


          <!-- 4 -->
          <div class="order-item hide">
            <h4>Item 4</h4>
            <label for="product">Product ID</label>
            <input list="product" type="text" class="half" name="product_4">
            <datalist id="product">
              <option selected>None</option>

              <?php
              include("./connect.php");
              error_reporting(0);
              $query = "SELECT * FROM products";
              $data = mysqli_query($connect, $query);
              $total = mysqli_num_rows($data);

              if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                  echo
                  "
              <option value='$result[Product_ID]'>"  . $result['Brand'] . " | Name: "  . $result['Product_Name'] . " | Color: " .  $result['Color'] . " | Size: " .  $result['Size'] .  " | Quantity: " .  $result['Quantity']  . "</option>
              ";
                }
              } else {
                echo "No records found";
              }
              ?>
            </datalist>

            <label for="product">Quantity</label>
            <input type="text" class="half" name="amount_4">
          </div>


          <!-- 5 -->
          <div class="order-item hide">
            <h4>Item 5</h4>
            <label for="product">Product ID</label>
            <input list="product" type="text" class="half" name="product_5">
            <datalist id="product">
              <option selected>None</option>

              <?php
              include("./connect.php");
              error_reporting(0);
              $query = "SELECT * FROM products";
              $data = mysqli_query($connect, $query);
              $total = mysqli_num_rows($data);

              if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                  echo
                  "
              <option value='$result[Product_ID]'>"  . $result['Brand'] . " | Name: "  . $result['Product_Name'] . " | Color: " .  $result['Color'] . " | Size: " .  $result['Size'] .  " | Quantity: " .  $result['Quantity']  . "</option>
              ";
                }
              } else {
                echo "No records found";
              }
              ?>
            </datalist>

            <label for="product">Quantity</label>
            <input type="text" class="half" name="amount_5">
          </div>

          <!-- 6 -->
          <div class="order-item hide">
            <h4>Item 6</h4>
            <label for="product">Product ID</label>
            <input list="product" type="text" class="half" name="product_6">
            <datalist id="product">
              <option selected>None</option>

              <?php
              include("./connect.php");
              error_reporting(0);
              $query = "SELECT * FROM products";
              $data = mysqli_query($connect, $query);
              $total = mysqli_num_rows($data);

              if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                  echo
                  "
              <option value='$result[Product_ID]'>"  . $result['Brand'] . " | Name: "  . $result['Product_Name'] . " | Color: " .  $result['Color'] . " | Size: " .  $result['Size'] .  " | Quantity: " .  $result['Quantity']  . "</option>
              ";
                }
              } else {
                echo "No records found";
              }
              ?>
            </datalist>

            <label for="product">Quantity</label>
            <input type="text" class="half" name="amount_6">
          </div>


          <!-- 7 -->
          <div class="order-item hide">
            <h4>Item 7</h4>
            <label for="product">Product ID</label>
            <input list="product" type="text" class="half" name="product_7">
            <datalist id="product">
              <option selected>None</option>

              <?php
              include("./connect.php");
              error_reporting(0);
              $query = "SELECT * FROM products";
              $data = mysqli_query($connect, $query);
              $total = mysqli_num_rows($data);

              if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                  echo
                  "
              <option value='$result[Product_ID]'>"  . $result['Brand'] . " | Name: "  . $result['Product_Name'] . " | Color: " .  $result['Color'] . " | Size: " .  $result['Size'] .  " | Quantity: " .  $result['Quantity']  . "</option>
              ";
                }
              } else {
                echo "No records found";
              }
              ?>
            </datalist>

            <label for="product">Quantity</label>
            <input type="text" class="half" name="amount_7">
          </div>

          <!-- 8 -->
          <div class="order-item hide">
            <h4>Item 8</h4>
            <label for="product">Product ID</label>
            <input list="product" type="text" class="half" name="product_8">
            <datalist id="product">
              <option selected>None</option>

              <?php
              include("./connect.php");
              error_reporting(0);
              $query = "SELECT * FROM products";
              $data = mysqli_query($connect, $query);
              $total = mysqli_num_rows($data);

              if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                  echo
                  "
              <option value='$result[Product_ID]'>"  . $result['Brand'] . " | Name: "  . $result['Product_Name'] . " | Color: " .  $result['Color'] . " | Size: " .  $result['Size'] .  " | Quantity: " .  $result['Quantity']  . "</option>
              ";
                }
              } else {
                echo "No records found";
              }
              ?>
            </datalist>

            <label for="product">Quantity</label>
            <input type="text" class="half" name="amount_8">
          </div>

          <!-- 9 -->
          <div class="order-item hide">
            <h4>Item 9</h4>
            <label for="product">Product ID</label>
            <input list="product" type="text" class="half" name="product_9">
            <datalist id="product">
              <option selected>None</option>

              <?php
              include("./connect.php");
              error_reporting(0);
              $query = "SELECT * FROM products";
              $data = mysqli_query($connect, $query);
              $total = mysqli_num_rows($data);

              if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                  echo
                  "
              <option value='$result[Product_ID]'>"  . $result['Brand'] . " | Name: "  . $result['Product_Name'] . " | Color: " .  $result['Color'] . " | Size: " .  $result['Size'] .  " | Quantity: " .  $result['Quantity']  . "</option>
              ";
                }
              } else {
                echo "No records found";
              }
              ?>
            </datalist>

            <label for="product">Quantity</label>
            <input type="text" class="half" name="amount_9">
          </div>

          <!-- 10 -->
          <div class="order-item hide">
            <h4>Item 10</h4>
            <label for="product">Product ID</label>
            <input list="product" type="text" class="half" name="product_10">
            <datalist id="product">
              <option selected>None</option>

              <?php
              include("./connect.php");
              error_reporting(0);
              $query = "SELECT * FROM products";
              $data = mysqli_query($connect, $query);
              $total = mysqli_num_rows($data);

              if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                  echo
                  "
              <option value='$result[Product_ID]'>"  . $result['Brand'] . " | Name: "  . $result['Product_Name'] . " | Color: " .  $result['Color'] . " | Size: " .  $result['Size'] .  " | Quantity: " .  $result['Quantity']  . "</option>
              ";
                }
              } else {
                echo "No records found";
              }
              ?>
            </datalist>

            <label for="product">Quantity</label>
            <input type="text" class="half" name="amount_10">
          </div>

        </div>

        <button type="button" class="add" onclick="addItem()">Add Item</button>

        <input type="submit" name="submit" value="submit">

      </form>
    </div>

  </div>



  <script>
    function addItem() {
      // return undefined;
      const hidden = document.querySelector(".hide");
      hidden.classList.remove("hide");
    }
  </script>

</body>

</html>