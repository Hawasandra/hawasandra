<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  html{
   background-color:##F5FFFA;
  }
  .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: brown;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.container {
  position: relative;
  width: 80%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: brown;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
  font-family: Comic Sans MS;
}
</style>
</head>
<body>
   <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <a href="dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
 <a href="homes.php"><i class="fa fa-fw fa-home"></i>Homes</a>
 <a href="gallery.html"><i class="fa fa-fw fa-user"></i>Gallery</a>
   <a href="about.html"><i class="fa fa-fw fa-envelope"></i>About us</a>
    </div>

<span style="font-size:30px;font-family:Comic Sans MS;color:brown;cursor:pointer" onclick="openNav()">&#9776; Homes</span>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
<table>
  <tr>
  <td>
  <div class="container">
  <img src="one.png" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
  <div class="text"><a href="registration.php"style="color: white">house no. 101</a></div>
  </div>
</div>
</td>
<td>
<div class="container">
  <img src="one.png" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
  <div class="text"><a href="registration.php"style="color: white">house no. 102</a></div>
  </div>
</td>
<td>
<div class="container">
  <img src="one.png" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
  <div class="text"><a href="registration.php"style="color: white">house no. 103</a></div>
  </div>
</td>
<td>
<div class="container">
  <img src="one.png" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
  <div class="text"><a href="registration.php" style="color: white">house no. 104</a></div>
  </div>
</td>
</tr>
</table>


</body>
</html>