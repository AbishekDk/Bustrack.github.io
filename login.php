<?php
    $title="StudentLogin"; 
    $bgc="#B22222";
    include_once "includes/head.php";
?>
<div class="main">
<video autoplay muted loop id="myVideo">
  <source src="videos/login.mp4" type="video/mp4">
</video>
<div class="center" style="background-color:#B22222;opacity:0.8;">
<table>
    <tr>
        <td>
<form action="student.php" method="get">  
    <h2 style="color:white;padding:5px;"> USER LOGIN</h2> 
        <div style="color:black;background-color:#F9DDD2;padding:31px;">
            <label>USERNAME &nbsp;&nbsp;:</label>   
            <input type="text" placeholder="User ID" name="studentid" required> <br><br>
            <label>PASSWORD &nbsp;&nbsp;:</label>   
            <input type="password" placeholder="**********" name="studentpwd" required><br><br>
            <label>USER TYPE &nbsp;&nbsp;:</label>   
            <input type="radio" name="utype" value="Student">Student
            <input type="radio" name="utype" value="Driver">Driver<br><br>
            <button type="submit" style="color:white;background-color:#E2725A;padding:5px 5px;width:100px;">Login</button>
        </div>   
    </form>
</td>
    <td>
<form action="admin.php" method="post">  
    <h2 style="color:white;padding:5px;"> ADMIN LOGIN</h2> 
        <div style="color:black;background-color:#F9DDD2;padding:28px;">
            <label>USERNAME &nbsp;&nbsp; :</label>   
            <input type="text" placeholder="ADMIN ID" name="adminid" required> <br><br>
            <label>PASSWORD &nbsp;&nbsp; :</label>   
            <input type="password" placeholder="**********" name="adminpwd" required><br><br>
            <p style="color:#E2725A">Admin purpose.Students have no access here</p><br>
            <button type="submit" style="color:white;background-color:#E2725A;padding:5px 5px;width:100px;">Login</button>
        </div>   
    </form>
</td>
</tr>
</table>
</div>
</div>
<?php
    include "includes/foot.php";
    
?>