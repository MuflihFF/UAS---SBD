<?php
$host="localhost";
$user="adminklinik";
$password="312010105";
$db="klinik_312010105";

$con = mysqli_connect($host,$user,$password,$db);
if (!$con){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>