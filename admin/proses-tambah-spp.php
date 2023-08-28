<?php
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

include'../koneksi.php';
$sql = "INSERT INTO spp(tahun,nominal) VALUES('$tahun','$nominal')";

try {
    $query = mysqli_query($koneksi, $sql);
    // run your code here
}
catch (exception $e) {
    //code to handle the exception
}

if($query){
    header("Location:?url=spp");
}else{
    echo "<script>alert('Maaf Data Tidak Dapat Tersimpan'); window.location.assign('?url=spp');</script>";
}


?>