<link 
    rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
    crossorigin="anonymous">
<?php
include "connect.php";
$utype=$_GET['utype'];
if($utype=="Student")
{
$stid=$_GET['studentid'];
$stpwd=$_GET['studentpwd'];
$res=mysqli_query($link,"SELECT * FROM students s join drivers d on d.dbusno=s.sbusno");
while($row=mysqli_fetch_array($res))
{
    if($row['studid']==$stid && $row['smobileno']==$stpwd)
    {
        ?>
        <div style="padding: 50px;text-align:center;">
        <p class="btn btn-primary">
        <?php
        echo "Welcome"." ".$row["sname"];?></p>
        <a href="login.php"><button class="btn btn-danger">Logout</button></a><br><br><?php
        echo "Bus -"." ".$row["sbusno"]."<br>";
        echo "Driver Name :"." ".$row["dname"]."<br>";
        echo "Driver Mob.no :"." ".$row["dmobileno"]."<br><br>";
        ?>
         <button class="btn btn-success" onclick="getLocation()">Show <?php echo $row["dbusno"] ?> Bus Location</button><br><br>

<p id="demo"></p>
</div>
<script>
var x = document.getElementById("demo");

function getLocation() {
if (navigator.geolocation)
{
    navigator.geolocation.getCurrentPosition(showPosition);
} else
{ 
    x.innerHTML = "Geolocation is not supported by this browser.";
}
}

function showPosition(position)
{
var lat=position.coords.latitude;
var lon=position.coords.longitude;
x.innerHTML ="<strong>Live Location Updated by your bus driver</strong><br><br><iframe src='https://maps.google.com/maps?q=" +lat+ ","
 +lon+ "&z=15&output=embed'" +
 "width='700' height='350' style='padding:10px;' loading='fast'></iframe>";
}
</script>
        </div>
        <?php
    }
   
}
}
else{
    $title="Driver";
    $drid=$_GET['studentid'];
    $drpwd=$_GET['studentpwd'];
    $res1=mysqli_query($link,"SELECT * FROM drivers");
    while($row1=mysqli_fetch_array($res1))
    {
        if($row1['drivid']==$drid && $row1['drivid']==$drpwd)
        {
        ?>
        <div style="padding: 50px;text-align:center;">
        <p class="btn btn-primary">
        <?php
        echo "Welcome"." ".$row1["dname"];?></p>
        <a href="login.php"><button class="btn btn-danger">Logout</button></a><br><br><?php
        echo "Bus -"." ".$row1["dbusno"]."<br>";
        echo "Driver Name :"." ".$row1["dname"]."<br>";
        echo "Driver Mob.no :"." ".$row1["dmobileno"]."<br><br>";
        ?>
        
        <button class="btn btn-success" onclick="getLocation()">Update location</button>
        <p id="d1"></p><p style="color:blue;" id="d2"></p>
        </div>
        <script>
        
        var x = document.getElementById("d1");
        var y = document.getElementById("d2");

        function getLocation() {
        if (navigator.geolocation)
        {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else
        { 
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
        }

        function showPosition(position)
        {
        var lat=position.coords.latitude;
        var lon=position.coords.longitude;
        x.innerHTML = "<br>Lattitude : "+lat+" , Longtitude : "+lon;
        y.innerHTML = "Sucessfully updated...";
        }
        </script><?php
    

        }
        
    }
}
?>      
