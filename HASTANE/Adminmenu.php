<?php
require "Adminpanel.php";

?>

<!DOCTYPE html>
<html>
<head>
<title>Doktor İşlemleri</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<style>
	h5 { 
		 font-weight: bold;
		 font-family: Verdana;	
		 font-variant: small-caps;
		 color:white;
		 text-align: left;
		 
		 }
	p {
		font-size=0px
		text-align: center;
		font-weight:bold;
		font-family: Verdana;
		font-variant: small-caps;
		color: navy;
	}
	.sidenav {
		height: 20%;
		width: 300px;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background:rgba(0,0,128, 0.3);
		overflow-x: hidden;
		padding-top: 20px;
	}

	.sidenav a {
		padding: 6px 8px 6px 16px;
		text-decoration: none;
		font-size: 25px;
		color: #818181;
		display: block;
	}

	.sidenav a:hover {
		color: #f1f1f1;
	}
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
		background:rgba(0, 0, 128, 0.3);
		position: absolute;
		top: 170px;
		width: 1536px;
		left: 0;
	}

	li {
		float: left;
	}

	li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	li a:hover:not(.active) {
		background-color: navy;
	}

	.active {
	background-color: #4CAF50;
	}
	.heart {
		position:absolute;
		top:0px;
		color:white;
		font-size:140px;
		
	}
	.dropbtn {
		background:rgb(0,0,0,0);
		color: white;
		padding: 17px;
		font-size: 15px;
		border: none;
		cursor: pointer;
	}
	.dropdown {
		position: fixed;
		top:170px;
		left:0;
		display: inline-block;
		background: rgb(0,0,128,0.3);
	}
	.dropdown-content {
		display: none;
		position: absolute;
		background-color: rgb(240, 201, 250,0.8);
		min-width: 165px;
		box-shadow: 0px 8px 16px 0px rgba(255,255,255,0.2);
		z-index: 1;
	}

	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	.dropdown-content a:hover {
		background-color: #f1f1f1;
	}

	.dropdown:hover .dropdown-content {
		display: block;
	}

	.dropdown:hover .dropbtn {
		background-color: #B41DF4;
	}

	</style>
	<script>
		function startTime() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
				m = checkTime(m);
				s = checkTime(s);
				document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
			var t = setTimeout(startTime, 500);
			}
		function checkTime(i) {
			if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
			return i;
		}
</script>

</head>

<body onload="startTime()">

	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
	<div class="heart"><i class='fas fa-heartbeat'></i></div>
		<div class="sidenav">
			<p><i class="fa fa-hospital-o w3-center" style="font-size:30px;color:white"></i><br><font size="2" color="white"> <?php echo date('d/m/y');?></font></p>
			<div id="txt" style="font-size:14px;color:white;"></div>
			<h5>kullanıcı: <?php echo $giris_session.",".$alan_session."!"."<br>"; ?></h5>
		</div>
		

<div class="w3-card-2 w3-border-p w3-xlarge" >
	  <!--<a href="Muayene.php" class="w3-bar-item w3-button"><i class="fa fa-stethoscope"></i> Muayene Randevusu Ver</a>-->
	  <!--<a href="Muayenesil.php" class="w3-bar-item w3-button"><i class="fa fa-remove"></i> Muayene Randevusu Sil</a>-->
	  <!--<a href="Ameliyat.php" class="w3-bar-item w3-button"><i class="fa fa-heartbeat"></i> Ameliyat Randevusu Ver</a>-->
	  <!--<a href="Ameliyatsil.php" class="w3-bar-item w3-button"><i class="fa fa-remove"></i> Ameliyat Randevusu Sil</a>-->
	  <!--<a href="Recete.php" class="w3-bar-item w3-button"><i class="fa fa-list-alt"></i> Reçete İşlemleri</a>-->
	  <!--<a href="Tahlil.php" class="w3-bar-item w3-button"><i class="fa fa-list-alt"></i> Tahlil İşlemleri</a>-->
	<ul>
		<li>
			<div class="dropdown">
				<button class="dropbtn"><font size="5"><i class="fa fa-wheelchair"></font></i><font size="3"> Hasta İşlemleri</font></button>
				<div class="dropdown-content">
					<a href="Hastagiris.php"><font size="3">Hasta Giriş</a>
					<a href="Hastacikis.php"><font size="3">Hasta Çıkış</a>
				</div>
			</div>
		</li>
		<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;</li>
		<li><a href="Paroladegistir.php"><font size="5"><i class="fa fa-exchange"></font></i><font size="3"> Parola Değiştir</font></a></li>
		<li><a href="Cikis.php"><font size="5"><i class="fa fa-sign-out"></font></i><font size="3"> Çıkış</font></a>
		</li>
		<li><a href="Hakkimda.php"><font size="5"><i class="fa fa-info-circle"></font></i><font size="3"> Hakkımda</font></a></li>
	</ul>
	
	  
</div>

<br>
<br>
<br>

</div>

</body>
</html>