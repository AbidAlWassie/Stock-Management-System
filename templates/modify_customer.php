<nav class="navbar">
  <a class="back" href="customers.php"><span>«</span>Back</a>
  <!-- <form <?php echo $rl ?> method="POST"><button type="submit" name="submit" class="btnToggle">Theme</button></form>
  <a class="logout" <?php echo $logout ?> href="logout.php">Logout</a> -->
</nav>

<header>
  <h1>Update your entry</h1>
</header>

<form action="" method="GET">
  <table id="table1" class="form-table <?php echo $theme ?>">

    <tr>
      <td class="label">Customer ID</td>
      <td class="input"><input type="text" value="<?php echo "$cid" ?>" name="cid" placeholder="Customer ID"></td>
    </tr>


    <tr>
      <td class="label">Customer Name</td>
      <td class="input"><input type="text" value="<?php echo "$cname" ?>" name="cname" placeholder="Customer Name"></td>
    </tr>

    <tr>
      <td class="label">Nickname</td>
      <td class="input"><input type="text" value="<?php echo "$nickname" ?>" name="nickname" placeholder="Color"></td>
    </tr>

    <tr>
      <td class="label">Address</td>
      <td class="input"><input type="text" value="<?php echo "$location" ?>" name="location" placeholder="Location"></td>
    </tr>

    <tr>
      <td class="label">Phone Number</td>
      <td class="input"><input type="text" value="<?php echo "$phone" ?>" name="phone" placeholder="Phone Number"></td>
    </tr>


    <tr>
      <td colspan="2"><a class="btnSubmit" href="stock.php"><input id="btnSubmit" type="submit" name="submit"></a></td>
    </tr>

  </table>
</form>
</body>

</html>