<?php
include ('../koneksi.php');

$idkret = $_POST['idkret'];
$value = $_POST['value'];

$sql = "INSERT INTO bobot VALUES (NULL, '$idkret', '$value')";
$results = $koneksi->query($sql);

if ($results==TRUE) {
    header("location:../view/dtbobot.php");
} else {
    header("location:../form/formbobot.php");
}

?>