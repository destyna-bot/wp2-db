<?php 
// echo $_GET["nim"];
require_once('koneksi.php');

$sql = "delete from mahasiswanwhre nim= '" . $_GET['nim'] . "'" ;
$result = pg_query($sql);
$jumlah = pg_num_rows(result);

if ($jumlah > 0){
        echo '<script type="text/javascript">';
        echo 'alert("Data telah tersimpan");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
}
        
?>