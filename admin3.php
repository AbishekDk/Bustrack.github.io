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
<div style="padding:20px;text-align:center;">
    <p class="btn btn-primary" style="text-align:center">BUS SETTINGS</p>
    <a href="admin1.php"><button type="button" class="btn btn-success"> Student Status</button></a>
    <a href="admin2.php"><button  type="button" class="btn btn-warning"> Driver Status</button></a>
    <a href="admin3.php"><button  type="button" class="btn btn-info"> Bus Details</button></a>
    <a href="login.php"><button class="btn btn-danger">Logout</button></a>
</div>
<td>
<div class="col-lg-12">
<table style="text-align:center;" class="table table-bordered">
    <thead>
      <tr>
        <th>STUDENT_ID</th>
        <th>STUDENT_NAME</th>
        <th>STUDENT_STOP</th>
        <th>STUDENT_BUSNO</th>
        <th>DRIVER_NAME</th>
        <th>DRIVER_CONTACT</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $ct=0;
        $res=mysqli_query($link,"SELECT s.studid,s.sname,s.splace,s.sbusno,d.dname,d.dmobileno FROM students s left join drivers d on s.sbusno=d.dbusno order by s.sbusno;");
        while($row=mysqli_fetch_array($res))
        {
            $ct+=1;
            echo "<tr>";
            echo "<td>";echo $row["studid"]; echo "</td>";
            echo "<td>";echo $row["sname"]; echo "</td>";
            echo "<td>";echo $row["splace"]; echo "</td>";
            echo "<td>";echo $row["sbusno"]; echo "</td>";
            echo "<td>";echo $row["dname"]; echo "</td>";
            echo "<td>";echo $row["dmobileno"]; echo "</td>";
            echo "</tr>";
        }
      ?>
    </tbody>
  </table></div>
  <p class="btn btn-secondary"><strong>Total Entry : <?php echo "$ct"?></strong></p></td></td>
</table>
</div>

</body>
</html>

