<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        th{
            text-align:center;
        }
    </style>
</head>
<body>

<div  class="col-lg-12" style="padding:40px;">
<p class="btn btn-primary" style="text-align:center">ADMIN SETTINGS</p>
<a href="admin1.php"><button type="button" class="btn btn-warning"> Student Status</button></a>
<a href="admin3.php"><button  type="button" class="btn btn-info"> Bus Details</button></a>
<a href="login.php"><button class="btn btn-danger">Logout</button></a><br><br>
<table>
    <tr>
        <td>
            <form action="admin2.php" name="form1" method="post">
      <label for="Name">Driver Id :</label>
      <input type="text" placeholder="Enter Driver Id" name="drivid" required>
      <label for="Name">Driver Name :</label>
      <input type="text" placeholder="Enter Driver Name" name="name1" required>
      <label for="Email">Driver Email :</label>
      <input type="email" placeholder="Enter Driver Email" name="email1" required>
      <label for="Name">Driver Mobile :</label>
      <input type="text" placeholder="Enter Driver mobile no" name="mobile1" required>
      <label for="Name">Driver Place :</label>
      <input type="text"  placeholder="Enter Driver Place" name="place1" required><br><br>
      <label for="Name">Bus num. :</label>
      <input type="text"  placeholder="Enter Driver bus number" name="busno" required>
</td>
</tr>
<tr>
  <td><br>
    <button type="submit" name="adddriv" class="btn btn-success">Add Driver</button>
  </form>
</td>
</tr>
<tr>
<td><br>
<div class="col-lg-12">
<table style="text-align:center;" class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>REG ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>MOBILE</th>
        <th>PLACE</th>
        <th>BUS NO</th>
        <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $dct=0;
        $res=mysqli_query($link,"select * from drivers");
        while($row=mysqli_fetch_array($res))
        {
            $dct+=1;
            echo "<tr>";
            echo "<td>";echo $row["did"]; echo "</td>";
            echo "<td>";echo $row["drivid"]; echo "</td>";
            echo "<td>";echo $row["dname"]; echo "</td>";
            echo "<td>";echo $row["demail"]; echo "</td>";
            echo "<td>";echo $row["dmobileno"]; echo "</td>";
            echo "<td>";echo $row["dplace"]; echo "</td>";
            echo "<td>";echo $row["dbusno"]; echo "</td>";
            echo "<td>"; ?><a href="delete1.php ?did=<?php echo $row["did"];?>"><button type="button" class="btn btn-danger">DELETE</button></a><?php echo "</td>";
            echo "</tr>";
        }
      ?>
    </tbody>
  </table></div>
  <p class="btn btn-secondary"><strong>Total Drivers : <?php echo "$dct"?></strong></p></td></td>
</table>
</div>

</body>
</html>
<?php

if(isset($_POST["adddriv"]))
{
    mysqli_query($link,"Insert into drivers values('$_POST[id1]','$_POST[drivid]','$_POST[name1]','$_POST[email1]','$_POST[mobile1]','$_POST[place1]','$_POST[busno]')");
    ?>
<script type=text/javascript>
window.location.href=window.location.href;
</script>
<?php
}


?>
