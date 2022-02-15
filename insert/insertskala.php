<?php
include ('../koneksi.php');

$val = $_POST['val'];
$ket = $_POST['ket'];

$sql = "INSERT INTO skala VALUES (NULL, '$val', '$ket')";
$results = $koneksi->query($sql);

if ($results==TRUE) {
    header("location:../view/dtsakala.php");
} else {
    header("location:../form/formskala.php");
}

?>