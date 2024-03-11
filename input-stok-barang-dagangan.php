<?php
echo '
    <body bgcolor="#CCCCC">
        <h2><p align="center">INPUT STOK BARANG DAGANGAN</p><h2>
            <form method="post" action="proses.php">
            <pre>
                Kode        :<input type="text" name="kode">
                Nama        :<input type="text" name="nama">
                Jumlah      :<input type="text" name="jumlah" size="7">
                Kemasan     :<select name="satuan">
            <option selected="Selected">--Pilih--</option>
            <option>Kaleng</option>
            <option>Kg</option>
            <option>1/4</option>
            <option>sachet</option>
            <option>botol</option>
            <option>pcs</option>
            <option>karton</option>
            <option>Meter</option>
            <option>Pouch</option>
            <option>Tube</option>
            </select>
                H_beli      :<input type="text" name="hbeli">
                H_jual      :<input type="text" name="hjual">
                Tanggal     :<input type="text" name="tgl" size="50">
                <input type="submit" name="tombolinput" value="Input">
            </form>
    </body>';
    ?>   
