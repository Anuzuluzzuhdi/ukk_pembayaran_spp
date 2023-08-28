<?php
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

include'../koneksi.php';
$sql = "INSERT INTO kelas(nama_kelas,kompetensi_keahlian) VALUES('$nama_kelas','$kompetensi_keahlian')";

try {
    $query = mysqli_query($koneksi, $sql);
    // run your code here
}
catch (exception $e) {
    //code to handle the exception
}


if($query){
    header("Location:?url=kelas");
}else{
    echo "<script>alert('Maaf Data Tidak Dapat Tersimpan'); window.location.assign('?url=kelas');</script>";
}


?>