<?php
    $title="Driver";
    $drid=$_GET['studentid'];
    $drpwd=$_GET['studentpwd'];
    $res1=mysqli_query($link,"SELECT * FROM drivers");
    while($row1=mysqli_fetch_array($res1))
    {
        if($row1['drivid']==$drid && $row1['dmobileno']==$drpwd)
        {
        ?>
        <link 
        rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
        crossorigin="anonymous">
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
        x.innerHTML =  "Live Location Updating to Students <br>Live Location<br><iframe src='https://maps.google.com/maps?q=" +lat+ ","
         +lon+ "&z=15&output=embed'" +
         "width='700' height='350' style='padding:10px;' loading='fast'></iframe>";
    }
</script>
        <?php
    }
}
?>
<?php
    include "includes/foot.php";
?>