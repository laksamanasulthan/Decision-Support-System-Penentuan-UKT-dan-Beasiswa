<?php
include ('../koneksi.php');

$nmalt = $_POST['alt'];

$sql = "INSERT INTO alternatif VALUES (NULL, '$nmalt')";
$results = $koneksi->query($sql);

if ($results==TRUE) {
    header("location:../view/dtalternatif.php");
} else {
    header("location:../form/formalternatif.php");
}

?>