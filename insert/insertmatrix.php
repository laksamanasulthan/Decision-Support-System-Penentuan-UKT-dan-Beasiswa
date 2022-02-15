<?php
include ('../koneksi.php');

$alt = $_POST['idalt'];
$bbt = $_POST['idbobot'];
$skl = $_POST['idskala'];

$sql = "INSERT INTO matrixkeputusan VALUES (NULL, '$alt', '$bbt', '$skl')";
$results = $koneksi->query($sql);

if ($results==TRUE) {
    header("location:../view/dtmatrix.php");
} else {
    header("location:../form/formmatrix.php");
}

?>
