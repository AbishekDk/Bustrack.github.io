<?php
include "connect.php";
$did=$_GET["did"];
mysqli_query($link,"delete from drivers where did=$did");

?>
<script type=text/javascript>
window.location="admin2.php";
</script>
