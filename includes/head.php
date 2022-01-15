 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMK BUS TRACKER - <?php echo "$title"?></title>
    <link 
    rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
    crossorigin="anonymous">
<style>
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: <?php echo "$bgc"?>;
  overflow-x: hidden;
  padding-top: 240px;
  opacity: 0.8;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  text-align:center;
  font-size: 25px;
  color: #f1f1f1;
  display: block;
}

.sidenav img{
  top:10%;
  width: 120px;
  height: 100px;
  left:20px;
  border-radius:30px;
  position: fixed;
  padding:10px;
}

.sidenav a:hover {
  color:#818181;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  top:220px;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding:40px;
}
.center{
  position: fixed;
  top: 180px;
  right:230px;
  font-family:Arial Bold;
  font-size:20px;
  text-align:center;
}
.center input{
  padding: 5px 3px;
}
.center1{
  position: fixed;
  top: 120px;
  right:260px;
  height:70%;
  width:60%;
  font-size:20px;
  text-align:center;
  color:white;
}
</style>
</head>
<body>
<div class="sidenav">
  <img src="images/logo.jfif" alt="k-MAD">
  <a href="index.php">HOME</a>
  <a href="login.php">LOGIN</a>
  <a href="about.php">ABOUT</a>
  <a href="contact.php">CONTACT</a>
</div>
  
