<!DOCTYPE html>
<html>
<head>
<title>Ameliyat Randevusu</title>

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

		.hastakayit {
			height: 97px;
			width: 570px;
			position: fixed;
			z-index: 1;
			top: 17px;
			left: 65px;
			background:rgba(0,0,128, 0.1);
			overflow-x: hidden;
			padding-top: 10px;
			color:white;
		}
		
		.sidebar {
			height: 75%;
			width: 620px;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 700px;
			background:rgba(0,0,128, 0.0);
			overflow-x: hidden;
			padding-top: 16px;
		}

		.sidebar a {
			padding: 6px 8px 6px 16px;
			text-decoration: none;
			font-size: 20px;
			color: #818181;
			display: block;
		}

		.sidebar a:hover {
			color: #f1f1f1;
		}

		.main {
			margin-left: 160px; /* Same as the width of the sidenav */
			padding: 0px 10px;
		}

		@media screen and (max-height: 450px) {
			.sidebar {padding-top: 15px;}
			.sidebar a {font-size: 18px;}
		}
		form {
			position:fixed;
			top:120px;
			left:50px; 
			width:600px
		}
		h2 {
			color:lightgreen;
		}
		.baslik {
			color:lightgreen;
		}

	</style>
</head>

<body>
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
<div class="w3-container">
    <br>
    <br>
    <div class="w3-card-4">
      <div >
        <h1 class="w3-xxlarge w3-left" style="position:fixed;left:0;top:50px;color:lightgreen">Ameliyat Randevusu Vereceğiniz Hastanın Bilgilerini Ekleyin:</h1>
      </div>

      <form class="w3-container" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <p>
			<i class="fa fa-user-plus" style="font-size:48px;color:lightgreen"></i><label style="color:lightgreen;"> Hasta Adı</label></p>
          <input class="w3-input w3-border" name="hastaadi" type="text">
        <p>     
		   <i class="fa fa-calendar" style="font-size:48px;color:lightgreen"></i><label style="color:lightgreen;"> Randevu Tarihi</label></p>
          <input class="w3-input w3-border" name="randevutarihi" type="datetime-local">
        <p>
		  <i class="fa fa-file-text-o" style="font-size:48px;color:lightgreen"></i><label style="color:lightgreen;"> Ameliyat Tipi</label></p>
          <input class="w3-input w3-border" name="ameliyattipi" type="text">
        <p>
		  <i class="fa fa-sort-numeric-asc" style="font-size:48px;color:lightgreen"></i><label style="color:lightgreen;"> Ameliyathane Numarası</label></p>
          <input class="w3-input w3-border" name="ameliyathane" type="text">
        <p>
          <input type="submit" name="eklebtn" class="w3-btn w3-light-lightgreen w3-right w3-large w3-border" value="EKLE">
        </p>
      </form>
      <br>
    </div>
	<div class="sidebar" style="top:80px;">
	  <button style="position:fixed;top:10px;right:10px;height:50px;width:50px;background:lightgreen;"><font size="5"><a  class="fa fa-fw fa-home" href="Doktormenu.php"></a></font></button>
    <br>
    <br>
    <?php
        error_reporting(0);
        require "Sessions.php";
        $dt=$giris_session;
        $baglanti=mysqli_connect("localhost", "root", "", "hastane");
        if(isset($_POST['hastaadi'])&&isset($_POST['randevutarihi'])&&isset($_POST['ameliyattipi'])&&isset($_POST['ameliyathane'])){
            $hastaadi=$_POST['hastaadi'];
            $randevutarihi=$_POST['randevutarihi'];
            $at=$_POST['ameliyattipi'];
            $an=$_POST['ameliyathane'];
            if(isset($_POST['eklebtn'])){
              $ameliyatekle=mysqli_query($baglanti, "INSERT INTO ameliyatlar (hastaad, tarih, ameliyat, ameliyathane, doktor) VALUES ('".$hastaadi."', '".$randevutarihi."', '".$at."', ".$an.", '".$dt."')");
            }
        }
		echo "<div style=\"position:fixed;top:100px;left200px;\">";
        echo "<h1 style=\"color:lightgreen\">MEVCUT AMELİYAT RANDEVULARINIZ:</h1>";

        $selectat=mysqli_query($baglanti, "SELECT * FROM ameliyatlar WHERE doktor='$dt'");

        echo "<table class=\"w3-table w3-striped w3-bordered\">";
        echo "<tr>";
        echo "<th>HASTA NUMARASI</th>";
        echo "<th>HASTA ADI</th>";
        echo "<th>AMELİYAT RANDEVU TARİHİ</th>";
        echo "<th>AMELİYAT TİPİ</th>";
        echo "<th>AMELİYATHANE NUMARASI</th>";
        echo "<th>DOKTOR</th>";
        echo "</tr>";
        while($rw = mysqli_fetch_array($selectat))
          {   
            echo "<tr>";
            echo "<td>".$rw["hastanu"]."</td>";
            echo "<td>".$rw["hastaad"]."</td>";
            echo "<td>".$rw["tarih"]."</td>";
            echo "<td>".$rw["ameliyat"]."</td>";
            echo "<td>".$rw["ameliyathane"]."</td>";
            echo "<td>".$rw["doktor"]."</td>";
            echo "</tr>";
          }
        echo "</table>";
	echo "</div>";
    ?>

  <br>
  <br>
  <br>
</div>
<div style="position:fixed;top:600px;right:50px;">
    <h3>Toplam Ameliyat Kayıtlarınız: <span><?php echo mysqli_num_rows($selectat); ?></span></h3>
  </div>
  <button style="position:fixed;top:600px;left:900px;background:lightgreen;height:50px;width:200px;"><font size="3"><a  class="fa fa-wheelchair" href="Ameliyatsil.php"> Ameliyat sil</a></font></button>
</div>
</div>
</body>
</html>
