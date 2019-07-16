<?php
require "Sessions.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Parola Değiştir</title>

<meta charset="utf-8">
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


</head>

<style>

	.baslik {
		background-color:rgb(0,0,128,0.1);
		font-family: Times New Roman;
	}
	label {
		color:lightgreen;
	}

</style>

<body>
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">

    <div class="w3-card-4">

      <div class="w3-container baslik ">
	  <span class="login100-form-title p-b-49">
        <h1 class="w3-left" style="color:lightgreen;">Giriş Parolanızı Değiştirin:</h1>
		</span>
      </div>
<br>
<br>
      <form class="w3-container" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <p>
			<i class="fa fa-lock" style="font-size:48px;color:lightgreen"></i><label>&nbsp; Eski Parola</label></p>
			<input class="w3-input w3-border" name="eskiparola" type="password">
        <p>     
			<i class="fa fa-unlock" style="font-size:48px;color:lightgreen"></i><label>&nbsp; Yeni Parola</label></p>
			<input class="w3-input w3-border" name="yeniparola" type="password">
			<br><br>
        <p><div class="container-login100-form-btn">
				<div class="wrap-login100-form-btn">
					<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							<input type="submit" name="degistir_btn" style="background-color:rgb(0,0,0,0)" value="DEĞİŞTİR">
						</button>
						
					</div>
				</div>
        </p>
      </form>
    <br>
    <br>
  </div>
  <br>
  <br>
  <button style="position:fixed;top:10px;right:10px;height:50px;width:50px;background:lightgreen;"><font size="5"><a  class="fa fa-fw fa-home" style="color:gray;" href="Doktormenu.php"></a></font></button>
    <?php
      error_reporting(0);
      $baglanti=mysqli_connect("localhost", "root", "", "hastane");
      if(isset($_POST['eskiparola'])&&isset($_POST['yeniparola'])){
        $eski_parola=$_POST['eskiparola'];
        $yeni_parola=$_POST['yeniparola'];
        if(isset($_POST['degistir_btn'])){
          $parola_update=mysqli_query($baglanti, "UPDATE doktorlar SET dsifre='$yeni_parola' WHERE dsifre='$eski_parola'");
        
        }
      }
      
  ?>

</div>
</body>