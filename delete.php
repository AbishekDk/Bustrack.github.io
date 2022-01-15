<?php
include "connect.php";
$sid=$_GET["sid"];
mysqli_query($link,"delete from students where sid=$sid");

?>
<script type=text/javascript>
window.location="admin1.php";
</script>
