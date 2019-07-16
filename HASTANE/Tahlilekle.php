<!DOCTYPE html>
<html>
<head>
<title>Tahlil Ekle</title>

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
		h4 {
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
    <div class="w3-card-4" style="position:fixed; top:10px;left:10px;">
      <div class="w3-container" >
        <h1 class="w3-xxlarge w3-left">Hastaya Vereceğiniz Tahlil Bilgilerini Ekleyin:</h1>
      </div>
      <form class="w3-container" style="font-size:10px;" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <p>
        <h4>Kan Tahlilleri:</h4>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="Hematoloji">
        <label>Hematoloji</label>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="Hormon">
        <label>Hormon</label>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="Rutin Biyokimya">
        <label>Rutin Biyokimya</label>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="ELISA">
        <label>ELISA</label></p>

        <p>
        <h4>İdrar Tahlilleri:</h4>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="Tam Idrar Tahlili">
        <label>Tam İdrar Tahlili</label>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="Idrar Kulturu">
        <label>İdrar Kültürü</label></p>

        <p>
        <h4>Mikroskopi Tahlilleri:</h4>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="Gaita">
        <label>Gaita</label>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="Sperm">
        <label>Sperm</label></p>

        <p>
        <h4>Radyolojik Tahliller:</h4>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="Ultrason">
        <label>Ultrason</label>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="MR">
        <label>MR</label>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="Bilgisayarli Tomografi">
        <label>Bilgisayarli Tomografi</label>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="PET">
        <label>PET</label>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="Direk Grafiler">
        <label>Direk Grafiler</label></p>

        <p>
        <h4>Patoloji Tahlilleri:</h4>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="Smear Testi">
        <label>Smear Testi</label></p>

        <p>
        <h4>Kardiyolojik Tahliller:</h4>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="EKO">
        <label>EKO</label>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="EKG">
        <label>EKG</label>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="Eforlu EKG">
        <label>Eforlu EKG</label>
        <input class="w3-check" type="checkbox" name="tahliller[]" value="Anjiografi">
        <label>Anjiografi</label></p>
	<div style="position:fixed;top:200px;left:550px;">
        <p>     
		<i class="fa fa-user" style="font-size:48px;color:lightgreen"></i><label style="color:lightgreen"> Hasta İsmi</label></p>
          <input class="w3-input w3-border" style="width:200px" name="hasta" type="text">
          
        <p>
		<i class="fa fa-calendar" style="font-size:48px;color:lightgreen"></i><label style="color:lightgreen"> Tahlil Veriliş Tarihi</label></p>
          <input class="w3-input w3-border"  name="tahliltarihi" type="date">
          
        <p>
          <input type="submit" name="butonekle" style="color:lightgreen" class="w3-btn w3-right w3-large w3-border" value="EKLE">
        </p>
		</div>
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
        $dt=$giris_session;
        
        $baglanti=mysqli_connect("localhost", "root", "", "hastane");
        if(isset($_POST['hasta'])&&isset($_POST['tahliltarihi'])&&isset($_POST['tahliller'])){
            $hasta=$_POST['hasta'];
            $tahliltarihi=$_POST['tahliltarihi'];
            $butuntahliller=$_POST['tahliller'];
            if(isset($_POST['butonekle'])){
                
                    foreach($butuntahliller as $tahlil) {
                      $muayeneekle=mysqli_query($baglanti, "INSERT INTO tahliller (hastaadi, tarih, tahlil, doktor) VALUES ('".$hasta."', '".$tahliltarihi."', '".$tahlil."', '".$dt."')");


                } 
            }

        }
		echo "<div style=\"color:lightgreen;position:fixed;top:100px;right:35px;width:680px;\"";
        echo "<h1>MEVCUT TAHLİL KAYITLARINIZ:</h1>";

        $selectta=mysqli_query($baglanti, "SELECT * FROM tahliller WHERE doktor='$dt'");

        echo "<table class=\"w3-table w3-striped w3-bordered\">";
        echo "<tr>";
        echo "<th>HASTA ADI</th>";
        echo "<th>TAHLİL GİRİŞ TARİHİ</th>";
        echo "<th>TAHLİL</th>";
        echo "<th>DOKTOR</th>";
        echo "</tr>";
        while($rw = mysqli_fetch_array($selectta))
          {   
            echo "<tr>";
            echo "<td>".$rw["hastaadi"]."</td>";
            echo "<td>".$rw["tarih"]."</td>";
            echo "<td>".$rw["tahlil"]."</td>";
            echo "<td>".$rw["doktor"]."</td>";
            echo "</tr>";
          }
        echo "</table>";
            
        echo "</div>";
    ?>
  
  </div>
  <br>
  <br>
  <br>
</div>
<div style="position:fixed;top:600px;right:50px;">
    <h3>Toplam Tahlil Kayıtlarınız: <span ><?php echo mysqli_num_rows($selectta); ?></span></h3>
  </div>
<button style="position:fixed;top:600px;left:900px;background:lightgreen;height:50px;width:200px;"><font size="3"><a  class="fa fa-wheelchair" href="Doktormenu.php"> Tahlil sonuclar</a></font></button>
</body>
</html>