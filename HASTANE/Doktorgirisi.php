<?php
error_reporting(0);
$baglanti=mysqli_connect("localhost", "root", "", "hastane");
session_start();                       
if($_SERVER["REQUEST_METHOD"]){
    $kullanici=$_POST["dkullanici"];
    $sifre=$_POST["dsifre"];
    $sonuc=mysqli_query($baglanti, "SELECT * FROM doktorlar WHERE dkullaniciadi='$kullanici' AND dsifre='$sifre'");
    $row=mysqli_fetch_array($sonuc);
    $count=mysqli_num_rows($sonuc);

    if($count==1){
        $_SESSION["giris_kullanici"]=$kullanici;
		if($kullanici == "admin" ) {
			header("location: Adminmenu.php");
		}
		else
			header("location: Doktormenu.php");
    }
    else{
        $hata = "Kullanici adınız veya parolanız yanlıştır.";
        
    }
}
?>




<!DOCTYPE html>
<html>
<head>
<title>GİRİŞ</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
	<style</style>
</head>

<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						<i class="fa fa-h-square" style="color:purple;font-size:60px"></i>
						<h3><font color="#BD2FD9" size="6">HASTANE SİSTEMİNE GİRİŞ </font></h3>
					</span>
				</form>
		<span class="login100-form-title p-b-60">
			<i class="fa fa-user-md" style="font-size:40px;color:#7BE1FA"></i><font color="#7BE1FA" size="5">HEKİM GİRİŞİ</font>
		</span>
    
    <div class="w3-container w3-white">  
        <form method="post" action="" class="w3-container w3-white">
                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
					<span class="label-input100"><b>Kullanıcı Adı</b></span>
					<input class="input100" type="text" name="dkullanici" placeholder="Kullanıcı adınızı giriniz...">
					<span class="focus-input100" data-symbol="&#xf206;"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
					<span class="label-input100"><b>Parola</b></span>
					<input class="input100" type="password" name="dsifre" placeholder="Parolanızı giriniz...">
					<span class="focus-input100" data-symbol="&#xf190;"></span>
				</div>
				<div class="text-right p-t-8 p-b-31">
					<a href="Paroladegistir.php">
						Forgot password?
					</a>
				</div
			<div class="container-login100-form-btn">
				<div class="wrap-login100-form-btn">
					<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							GİRİŞ
						</button>	
					</div>
				</div>
            </p>

        </form>
    </div>
</body>
</html>
