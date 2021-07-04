<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/default_styles.css">
</head>

<body>

  <table class="table-sortable" id="stock">
    <thead id="list-column">
      <tr>
        <th>Name</th>
        <th>Nickname</th>
        <th>Address</th>
        <th>Phone</th>
        <th>ID</th>
        <th>Options</th>
      </tr>
    </thead>

    <tbody id="root-stock" class="list-items <?php echo $theme ?>">
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
          <tr>
          <td>" . $result['Customer_Name'] . "</td>
          <td>" . $result['Nickname'] . "</td>
          <td>" . $result['Location'] . "</td>
          <td>" . $result['Phone'] . "</td>
          <td>" . $result['Customer_ID'] . "</td>
          <td><a href='modify_customers.php?cname=$result[Customer_Name]&nickname=$result[Nickname]&phone=$result[Phone]&cid=$result[Customer_ID]' class='btnModify'>Modify</td>
          </tr>
          ";
        }
      } else {
        echo "No records found";
      }
      ?>

    </tbody>

    <!-- <tfoot>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th>Total</th>
        <th id="result"></th>
        <th colspan="2"></th>
      </tr>
    </tfoot> -->
  </table>

</body>

</html>