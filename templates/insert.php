<style>
  .resp {
    display: flex;
    justify-content: center;
    flex-direction: row;
  }


  form:nth-child(1) {
    margin-right: 20px;
  }

  form:nth-child(2) {
    margin-left: 20px;
  }
</style>

<div class="resp" style="background-color: #00000000;">



  <form action="" method="POST">
    <table id="table1" class="form-table <?php echo $theme ?>">
      <header>
        <h1>Add new product</h1>
      </header>
      <tr>
        <td class="label">Product ID</td>
        <td class="input"><input type="text" name="id" placeholder="Start after the last one"></td>
      </tr>

      <tr>
        <td class="label">Brand</td>
        <td class="input"><input type="text" name="brand" placeholder="Brand" required></td>
      </tr>

      <tr>
        <td class="label">Product Name</td>
        <td class="input"><input type="text" name="product" placeholder="Product Name" required></td>
      </tr>

      <tr>
        <td class="label">Color</td>
        <td class="input"><input type="text" name="color" placeholder="Color" required></td>
      </tr>

      <tr>
        <td class="label">Size</td>
        <td class="input"><input type="text" name="size" placeholder="Size" required></td>
      </tr>

      <tr>
        <td class="label">Price</td>
        <td class="input"><input type="text" name="price" placeholder="Price" required></td>
      </tr>

      <tr>
        <td class="label">Quantity</td>
        <td class="input"><input type="text" name="quantity" placeholder="Quantity" required></td>
      </tr>

      <tr>
        <td colspan="2"><a class="btnSubmit" href="index.php"><input id="btnSubmit" type="submit" name="submit" value="Insert"></a></td>
      </tr>

    </table>
  </form>





  <form action="" method="POST">
    <table id="table1" class="form-table <?php echo $theme ?>">
      <header>
        <h1>Create a customer</h1>
      </header>
      <tr>
        <td class="label">Customer ID</td>
        <td class="input"><input type="text" name="cid" placeholder="Start after the last one"></td>
      </tr>

      <tr>
        <td class="label">Customer Name</td>
        <td class="input"><input type="text" name="cname" placeholder="Customer Name" required></td>
      </tr>

      <tr>
        <td class="label">Nickname</td>
        <td class="input"><input type="text" name="nickname" placeholder="Nickname" required></td>
      </tr>

      <tr>
        <td class="label">Address</td>
        <td class="input"><input type="text" name="location" placeholder="Address" required></td>
      </tr>

      <tr>
        <td class="label">Phone Number</td>
        <td class="input"><input type="text" name="phone" placeholder="Phone Number" required></td>
      </tr>


      <tr>
        <td colspan="2"><a class="btnSubmit" href="index.php"><input id="btnSubmit" type="submit" name="csubmit" value="Insert"></a></td>
      </tr>

    </table>
  </form>

</div>



</body>

</html>