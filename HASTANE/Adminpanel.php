<?php
require "Sessions.php";

if ($giris_session != "admin") {
	header("location: Doktorgirisi.php");
}
?>
