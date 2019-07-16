<?php
require "Sessions.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Hasta Çıkış</title>

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
		.baslik {
			background-color:rgb(0,0,128,0.1);
			height:65px;
			width:570px;
			position: fixed;
			top:170px;
			left:65px;
		}
		.hastakayit {
			height: 600px;
			width: 650px;
			position: fixed;
			z-index: 1;
			top: 80px;
			left: 50px;
			background:rgba(0,0,128, 0.0);
			overflow-x: hidden;
			padding-top: 20px;
			color:white;
			font-size: 40px;
		}
		.sidebar {
			height: 80%;
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
	
		h2 {
			
			color:lightgreen;
		}

	</style>
	
</head>

<body>
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
<div class="w3-container">
    <br>
    <br>
	<div class="baslik">
		<span class="login100-form-title p-b-49" style="color:lightgreen;">
			<h3>&nbsp;&nbsp;Çıkış Yapacak Hastanın İsmini Giriniz:</h3>
		</span>
	<div>
      <div class="hastakayit" style="position:fixed;top:100px;left:50px;width:600px;"  >
	  <br>
	  <br>
		

      <form class="w3-container" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <p>
          <input class="w3-input w3-border" name="hastaismi" type="text">
          <input type="submit" name="silbuton" class="w3-btn w3-right w3-large w3-border" style=" background-color:lightgreen;" value="SİL"></p>
      </form>
      <br>
      <br>
	  </div>

</div>
  <br>
  <br>
  <div class="sidebar" style="background-color:rgb(0,0,128,0.1);top:15px;padding:10px;">
	<span class="login100-form-title p-b-49">
		<h2>GİRİŞİ OLAN HASTALAR<h2>
	</span>
  </div>
  
  <div class="sidebar" style="top:80px;">
  
  <button style="position:fixed;top:10px;right:10px;height:50px;width:50px;background:lightgreen;"><font size="5"><a  class="fa fa-fw fa-home" href="Doktormenu.php"></a></font></button>
  
<?php
      error_reporting(0);
      require "Sessions.php";
      $doktor=$giris_session;
      $baglanti=mysqli_connect("localhost", "root", "", "hastane");
      if(isset($_POST['hastaismi'])){
          $hastaismi=$_POST['hastaismi'];
          if(isset($_POST['silbuton'])){
            $hastacikis=mysqli_query($baglanti, "DELETE FROM hastalar WHERE hastaadi='$hastaismi' AND doktor='$doktor'");
          }
      }
?>
<form action="Hastacikis.php" method="post">
     <?php $selecth=mysqli_query($baglanti, "SELECT * FROM hastalar WHERE doktor='$doktor'"); ?>
      <table class="w3-table-all w3-hoverable">
      <tr>
		<th>HASTA ADI</th>
		<th>YATIŞ TARİHİ</th>
		<th>ODA NO</th>
		<th>YATIŞ NEDENİ</th>
		<th>DOKTOR</th>
		</tr>
      <?php while($row = mysqli_fetch_array($selecth))
        { ?>
          <tr>
			<td><input type="checkbox" name="sil[]" value="<?php echo $row["hastaadi"] ?>"/><?php echo $row["hastaadi"]; ?></td>
				<td><?php echo $row["yatistarihi"];?></td>
				<td><?php echo $row["odano"];?></td>
				<td><?php echo $row["yatisnedeni"];?></td>
				<td><?php echo $row["doktor"]; ?></td>
			</tr>
        <?php } ?>
      </table>

	  <input type="submit" name="button" id="button "value="Seçilenleri Sil"/>
	  
	  </form>
	  <?php 
	  $silinecekler = @$_POST["sil"];
	  if(isset($_POST['button'])) {
		$silinecekler = @$_POST["sil"];
		foreach($silinecekler as $sil) {
			$temizle=mysqli_query($baglanti, "DELETE FROM hastalar WHERE hastaadi='$sil'");
		}
	  }
	  ?>

  <button class="w3-btn w3-right w3-large w3-border" style="position:fixed;top:600px;left:900px;background:lightgreen;height:50px;width:200px;"><font size="4"><a  class="fa fa-wheelchair" style="color:gray;" href="Hastagiris.php">Hasta Girişi Yap</a></font></button>
  </div>
  <br>
  <br>
  

<div class="container-login100-form-btn" style="position:fixed;top:540px;left:800px;width:410px;height:50px;">
	<div class="wrap-login100-form-btn">
		<div class="login100-form-bgbtn"></div>
		  <span class="login100-form-title p-b-49">
		  <h4 style="color:white;">&ensp;Toplam Yatan Hasta Kayıtlarınız: <span><?php echo mysqli_num_rows($selecth); ?></span></h4>
		  </span>
	</div>
</div>

  <br>
  <br>
  <br>
</div>

</div>

</body>
</html>