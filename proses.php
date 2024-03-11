<?php
if(!$db)
    {echo "Koneksi gagal" ;}
    else
    {echo"Koneksi berhasil";}
if(isset($_POST['tombolinput']))
    $kode   =$_POST['kode'];
    $nama   =$_POST['nama'];
    $kemasan=$_POST['kemasan'];
    $jumlah =$_POST['jumlah'];
    $hbeli  =$_POST['hbeli'];
    $hjual  =$_POST['hjual'];
    $tgl    =$_POST['tgl'];
$SQL='insert into barangdagangan(kode,nama,kemasan,jumlah,hbeli,hjual,tgl) values("'.$kode.'";"'.$nama.'";"'.$kemasan.'";"'.$jumlah.'";"'.$hbeli.'";"'.$hjual.'";"'.$tgl.'")';
$Query="mysqli_query($db,$SQL)";
header("Location:menu.php");
?>