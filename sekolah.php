<?php
include "koneksi.php";


if (isset($_POST['btnSimpan'])){
    $kode = $_POST['Kode_sekolah'];
    $nama = $_POST['Nama_sekolah'];
    $alamat = $_POST['Alamat_sekolah'];
    $akreditasi = $_POST['akreditasi'];
    $telpon = $_POST['No_tlp'];
    $email = $_POST['email'];
    $kepsek = $_POST['Nama_kepsek'];

    $query="insert into tb_sekolah (Kode_sekolah, Nama_sekolah, Alamat_sekolah, akreditasi, No_tlp, email, Nama_kepsek) values
    ('$kode' , '$nama' , '$alamat' , '$akreditasi' , '$telpon' , '$email' , '$kepsek')";

    $equery=$condb->query($query);
    header("location:view_sklh.php");

}else{

}
?>

<hr>
<form name="sklh" method="post" action="sekolah.php">
    <table border="0">
    <tr>
        <td colspan="3">Form Sekolah SMK Tangerang Selatan</td>
    </tr>
    <tr>
        <td>Kode Sekolah</td>
        <td>:</td>
        <td><input type="text" name="Kode_sekolah" maxlength="10"></td>
    </tr>
    <tr>
        <td>Nama Sekolah</td>
        <td>:</td>
        <td><input type="text" name="Nama_sekolah" maxlength="15"></td>
    </tr>
    <tr>
        <td>Alamat Sekolah</td>
        <td>:</td>
        <td><input type="text" name="Alamat_sekolah" maxlength="50"></td>
    </tr>
    <tr>
        <td>Akreditasi</td>
        <td>:</td>
        <td><input type="text" name="akreditasi" maxlength="10"></td>
    </tr>
    <tr>
        <td>Nomor Telpon</td>
        <td>:</td>
        <td><input type="text" name="No_tlp" maxlength="15"></td>
    </tr>
    <tr>
        <td>E-mail</td>
        <td>:</td>
        <td><input type="text" name="email" maxlength="25"></td>
    </tr>
    <tr>
        <td>Nama Kepsek</td>
        <td>:</td>
        <td><input type="text" name="Nama_kepsek" maxlength="25"></td>
    </tr>
    <tr>
        <td colspan="3"><input type="submit" name="btnSimpan" value="Save"></td>
    </tr>
    </table>
</form>