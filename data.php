<?php
if($_POST["kullaniciadi"] == "b221210587@sakarya.edu.tr" && $_POST["sifre"] == "b221210587")
{
    echo "Hoşgeldiniz ". strtoupper($_POST["sifre"]);
}
else
{
    header("Location: login.html");
}
?>