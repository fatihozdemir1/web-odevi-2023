<?php

session_start();
ob_start();
include("ayar.php");


if(($_POST["email"]=="g201210047@sakarya.edu.tr") && ($_POST["password"]=="g201210047"))
{

$_SESSION["login"] = "true";
$_SESSION["email"] = "g201210047@sakarya.edu.tr";
$_SESSION["password"] = "g201210047";

echo "Hosgeldiniz g201210047. Başarıyla giriş yaptınız. Giriş sayfasına yonlendiriliyorsunuz. Lütfen bekleyin..";
												
header("Refresh: 2; url=index.html");

}
elseif(($_POST["email"]=="") && ($_POST["password"]==""))
{
    echo "Kullanici adi veya sifre bos birakilmamalidir";
    header("Refresh: 2; url=giris.html");
}

else
{
	echo "Kullanici adi veya sifreniz yanlis.";
	header("Refresh: 2; url=giris.html");
}


ob_end_flush();


?>