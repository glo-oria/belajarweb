<?php
include "koneksi.php";

$tampilsekolah = "select * from tb_sekolah";
$qtampilsekolah = $condb->query ($tampilsekolah);

echo "<h2>Data Sekolah </h2>";
echo "<a href = 'sekolah.php'>Insert Data</a>";

echo "<table border=1>";
echo "<tr><td>Kode</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Akreditasi</td>
        <td>Telpon</td>
        <td>E-mail</td>
        <td>Kepsek</td>
        <td>Aksi</td>
        </tr>";

while($view = $qtampilsekolah->fetch_assoc()){

    echo "<tr><td>".$view['Kode_sekolah']."</td>
        <td>".$view['Nama_sekolah']."</td>
        <td>".$view['Alamat_sekolah']."</td>
        <td>".$view['akreditasi']."</td>
        <td>".$view['No_tlp']."</td>
        <td>".$view['email']."</td>
        <td>".$view['Nama_kepsek']."</td>
        <td><a href = 'delete_sklh.php? Kode_sekolah=".$view['Kode_sekolah']."'>Delete</a></td>
        </tr>";
}
echo "</table>";

?>