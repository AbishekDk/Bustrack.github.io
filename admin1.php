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
<a href="admin2.php"><button type="button" class="btn btn-warning">Driver Status</button></a>
<a href="admin3.php"><button  type="button" class="btn btn-info"> Bus Details</button></a>
<a href="login.php"><button class="btn btn-danger">Logout</button></a><br><br>
<table>
    <tr>
        <td>
            <form action="admin1.php" name="form1" method="post">
      <label for="Name">Student Id :</label>
      <input type="text" placeholder="Enter Student Id" name="studid" required>  
      <label for="Name">Student Name :</label>
      <input type="text" placeholder="Enter Student Name" name="name" required>
      <label for="Email">Student Email :</label>
      <input type="email" placeholder="Enter Student Email" name="email" required>
      <label for="Name">Student Mobile :</label>
      <input type="text" placeholder="Enter Student mobile no" name="mobile" required>
      <label for="Name">Student Place :</label>
      <input type="text"  placeholder="Enter Student Place" name="place" required><br><br>
      <label for="Name">Bus num. :</label>
      <input type="text"  placeholder="Enter Student bus number" name="busno" required>
</td>
</tr>
<tr>
    <td><br>
    <button type="submit" name="addstud" class="btn btn-success">Add Student</button>
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
        $sct=0;
        $res=mysqli_query($link,"select * from students");
        while($row=mysqli_fetch_array($res))
        {
            $sct+=1;
            echo "<tr>";
            echo "<td>";echo $row["sid"]; echo "</td>";
            echo "<td>";echo $row["studid"]; echo "</td>";
            echo "<td>";echo $row["sname"]; echo "</td>";
            echo "<td>";echo $row["semail"]; echo "</td>";
            echo "<td>";echo $row["smobileno"]; echo "</td>";
            echo "<td>";echo $row["splace"]; echo "</td>";
            echo "<td>";echo $row["sbusno"]; echo "</td>";
            echo "<td>"; ?><a href="delete.php ?sid=<?php echo $row["sid"];?>"><button type="button" class="btn btn-danger">DELETE</button></a><?php echo "</td>";
            echo "</tr>";
        }
      ?>
    </tbody>
  </table></div>
  <p class="btn btn-secondary"><strong>Total Students : <?php echo "$sct"?></strong></p></td>
</table>
</div>
</body>
</html>
<?php

if(isset($_POST["addstud"]))
{
    mysqli_query($link,"Insert into students values(NULL,'$_POST[studid]','$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[place]','$_POST[busno]')");
    ?>
    <script type=text/javascript>
window.location.href=window.location.href;
</script>
<?php
}


?>
