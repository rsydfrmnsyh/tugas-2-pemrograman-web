<?php
    include "header.php";

    $laptop=9000000;
    $keyboard=850000;
    $speaker=500000;
    $printer=3000000;

    $sub1=$laptop * 3;
    $sub2=$keyboard * 4;
    $sub3=$speaker * 6;
    $sub4=$printer * 7;
    $total = number_format($sub1 + $sub2 + $sub3 + $sub4);

?>
<div class="container">
    <h1>Products</h1>
    <br>
    <table>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th style="text-align: left;">Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Sub total</th>
        </tr>
        <?php
            $barang = array(
                array("nomor" => 1, "kode" => "B001", "nama barang" => "Laptop Asus", "harga" => number_format($laptop),"jumlah" => 3, "sub total" => number_format($sub1)),
                array("nomor" => 2, "kode" => "B002", "nama barang" => "Keyboard Logitech", "harga" => number_format($keyboard),"jumlah" => 4, "sub total" => number_format($sub2)),
                array("nomor" => 3, "kode" => "B003", "nama barang" => "Speaker", "harga" => number_format($speaker),"jumlah" => 6, "sub total" => number_format($sub3)),
                array("nomor" => 4, "kode" => "B004", "nama barang" => "Printer Epson", "harga" => number_format($printer),"jumlah" => 7, "sub total" => number_format($sub4))
            );

            foreach($barang as $subArray)
            {
        ?>
        <tr>
            <td><?php echo $subArray['nomor']; ?>.</td>
            <td><?php echo $subArray['kode']; ?></td>
            <td style="text-align: left;"><?php echo $subArray['nama barang']; ?></td>
            <td style="text-align: right;">Rp.<?php echo $subArray['harga']; ?></td>
            <td style="text-align: center;"><?php echo $subArray['jumlah']; ?></td>
            <td style="text-align: right;">Rp.<?php echo $subArray['sub total']; ?></td>
        </tr>
        <?php
            }
        ?>
        <tr>
            <td style="text-align: right; font-weight: bold;" colspan="5">Total</td>
            <td style="text-align: right;">Rp.<?php echo $total ?></td>
        </tr>
    </table>    
</div>
<?php
    include "footer.php";
?>