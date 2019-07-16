<!DOCTYPE html>
<html>
<head>
<title>Muayene Randevusu Sil</title>

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
    <div class="w3-card-4" style="position:fixed;top:15px;left:15px;height:12%">
      <div class="w3-container ">
        <h1 class="w3-xxlarge w3-left">Muayene Randevusunu Silmek İstediğiniz Hastanın Numarasını Seçin:</h1>
      </div>

      <form class="w3-container" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <p>
		<i class="fa fa-user-times" style="font-size:48px;color:lightgreen"></i><label style="color:lightgreen"> Hasta Numarası</label>
          <input class="w3-input w3-border" name="hastanumara" type="text">
          </p>
        <p>
          <input type="submit" name="sil_btn" style="color:lightgreen" class="w3-btn w3-right w3-large w3-border" value="SİL"></p>
      </form>
      <br>
      <br>
  </div>
  <br>
  <br>
<div class="sidebar" style="top:80px;">
	  <button style="position:fixed;top:10px;right:10px;height:50px;width:50px;background:lightgreen;"><font size="5"><a  class="fa fa-fw fa-home" href="Doktormenu.php"></a></font></button>
    <?php
      error_reporting(0);
      require "Sessions.php";
      $doktor=$giris_session;
      $baglanti=mysqli_connect("localhost", "root", "", "hastane");
      if(isset($_POST['hastanumara'])){
          $hastanumara=$_POST['hastanumara'];
          if(isset($_POST['sil_btn'])){
            $muayenesil=mysqli_query($baglanti, "DELETE FROM muayeneler WHERE hastano='$hastanumara' AND doktor='$doktor'");

          }

      }
echo "<div style=\"color:lightgreen;position:fixed;top:110px;right:35px;width:680px;\"";
      echo "<h1>MEVCUT MUAYENE RANDEVULARINIZ:</h1>";

        $selectsonuc=mysqli_query($baglanti, "SELECT * FROM muayeneler WHERE doktor='$doktor'");

        echo "<table class=\"w3-table w3-striped w3-bordered\">";
        echo "<tr>";
        echo "<th>HASTA NUMARASI</th>";
        echo "<th>HASTA ADI</th>";
        echo "<th>MUAYENE RANDEVU TARİHİ</th>";
        echo "<th>KISACA ŞİKAYETLER</th>";
        echo "<th>DOKTOR</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($selectsonuc))
          {   
            echo "<tr>";
            echo "<td>".$row["hastano"]."</td>";
            echo "<td>".$row["hastaadi"]."</td>";
            echo "<td>".$row["tarih"]."</td>";
            echo "<td>".$row["kisasikayet"]."</td>";
            echo "<td>".$row["doktor"]."</td>";
            echo "</tr>";
          }
        echo "</table>";
echo "</div>";
     
  ?>
  
  </div>
  <br>
  <br>
  <div style="position:fixed;top:600px;right:50px;">
    <h3>Toplam Muayene Kayıtlarınız: <span><?php echo mysqli_num_rows($selectsonuc); ?></span></h3>
  </div>
<button style="position:fixed;top:600px;left:900px;background:lightgreen;height:50px;width:200px;"><font size="3"><a  class="fa fa-wheelchair" href="Muayene.php"> Randevu al</a></font></button>
  <br>
</div>



</body>
</html>
