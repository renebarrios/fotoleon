


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/main4.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>

 <link  rel = "icon"  type = "image/png"  href = "img/icon_512.png" >

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta  name = "HandheldFriendly "  content = " true ">
  <meta  name = "compatible con la aplicación web de apple-mobile"content = "yes" >
  <meta  name = "apple-mobile-web-app-status-bar-style"  content = "black-translucent" >
 
  <link  rel = " apple-touch-icon "  href = " ./ProgramadorFitness.png " >
  <link  rel = "apple-touch-startup-image"  href = "" >
  <link  rel = "manifest"  href = "./manifest.json " >

</head>
<body>

  <script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>




	<div class="all-screen">
		<div class="content">
			<iframe src="home.php" name="content-movil"></iframe>
		</div>
		<div class="bar-menu">
			<div class="menu-option"><a href="home.php" target="content-movil" onclick="cambiar1()"><img src="img/home.png" id="img-home"></a></div>
			<div class="menu-option"><a href="movil/confirmar.php" target="content-movil" onclick="cambiar2()"><img src="img/check.png" id="img-check"></a></div>
			<div class="menu-option"><a href="movil/delivery.php" target="content-movil" onclick="cambiar3()"><img src="img/box.png" id="img-box"></a></div>
			<div class="menu-option"><a href="movil/historial.php" target="content-movil" onclick="cambiar4()"><img src="img/history.png" id="img-history"></a></div>
			<div class="menu-option"><a href="movil/pay.php" target="content-movil" onclick="cambiar5()"><img src="img/pay.png" id="img-pay"></a></div>

		</div>
		
	</div>

<script type="text/javascript">
 
 
function cambiar1 () {
  document.getElementById('img-home').src = "img/home-s.png";
  document.getElementById('img-check').src = "img/check.png";
  document.getElementById('img-box').src = "img/box.png";
  document.getElementById('img-history').src = "img/history.png";
  document.getElementById('img-pay').src = "img/pay.png";


 }
function cambiar2 () {
  document.getElementById('img-check').src = "img/check-s.png";
  document.getElementById('img-home').src = "img/home.png";
  document.getElementById('img-box').src = "img/box.png";
  document.getElementById('img-history').src = "img/history.png";
  document.getElementById('img-pay').src = "img/pay.png";

 }
function cambiar3 () {
  document.getElementById('img-box').src = "img/box-s.png";
  document.getElementById('img-home').src = "img/home.png";
  document.getElementById('img-check').src = "img/check.png";
  document.getElementById('img-history').src = "img/history.png";
  document.getElementById('img-pay').src = "img/pay.png";

 }
function cambiar4 () {
  document.getElementById('img-history').src = "img/history-s.png";
  document.getElementById('img-home').src = "img/home.png";
  document.getElementById('img-check').src = "img/check.png";
  document.getElementById('img-box').src = "img/box.png";
  document.getElementById('img-pay').src = "img/pay.png";

 }
function cambiar5 () {
  document.getElementById('img-pay').src = "img/pay-s.png";
  document.getElementById('img-home').src = "img/home.png";
  document.getElementById('img-check').src = "img/check.png";
  document.getElementById('img-box').src = "img/box.png";
  document.getElementById('img-history').src = "img/history.png";
  

 }

 
 
</script>


</body>
</html>