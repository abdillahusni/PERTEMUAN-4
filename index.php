<?php
include "koneksi.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Penjualanan</title>
</head>
<body>
    <table border="1">
        <caption>Data Stok Barang</caption>
        <form action="" method="get">
                <select name="filter">
                    <option value="Fashion">Fashion</option>
                    <option value="Food">Food</option>
                    <option value="Farmasi">Farmasi</option>
                </select>
                <input type="submit" value="Filter" />
            </form>
        </caption>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok Barang</th>
            <th>Kategori</th>
        </tr>
        <?php
        $query="SELECT * FROM barang where kategori='$_GET[filter]';";
        $result=$mysqli->query($query);
        $no=0;
        while($row=$result->fetch_assoc()){
        $no++;
    ?>
    <tr>
        <td><?=$no;?></td>
        <td><?=$row['Nama_Barang'];?></td>
        <td><?=FormatRupiah($row['Harga']);?></td>
        <td><?=$row['Stok_Barang'];?></td>
        <td><?=$row['kategori'];?></td>

    </tr>
    <?php
        }
        ?>
        </table>
    </body>
    </html>