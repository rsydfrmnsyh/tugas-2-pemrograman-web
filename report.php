<?php
    include "header.php";

    $tgl1=date_create('01-03-2023');
    $tgl2=date_create('01-03-2023');
    $tgl3=date_create('08-03-2023');
    $tgl4=date_create('09-03-2023');
    $tgl5=date_create('09-03-2023');
    $tgl6=date_create('16-03-2023');
    $tgl7=date_create('16-03-2023');
    $tgl8=date_create('15-03-2023');
    $tgl9=date_create('16-02-2023');
    $tgl10=date_create('24-03-2023');
 
    $pemasukanArr = [1000000, 100000, 200000, 89000, 0, 165000, 330000, 100000, 100000, 24032023];
    $pemasukan=array_map(function($num){
        return number_format($num);
    },$pemasukanArr);

    $pengeluaranArr = [0, 0, 0, 0, 21000, 0, 0, 0, 0, 0];
    $pengeluaran=array_map(function($num){
        return number_format($num);
    }, $pengeluaranArr);
    
    function total($arr) {
        $total=0;
        foreach ($arr as $num) {
            $total += $num;
        }
        return $total;
    }

    $totalpem = total($pemasukanArr);
    $totalpeng = total($pengeluaranArr);
    $saldo = $totalpem - $totalpeng;
?>
<div class="container">
    <h1>Report</h1>
    <br>
    <table>
        <tr>
            <th colspan="4"></th>
            <th colspan="2">JENIS</th>
        </tr>
        <tr>
            <th>NO</th>
            <th>TANGGAL</th>
            <th>KATEGORI</th>
            <th>KETERANGAN</th>
            <th style="padding-right:20px;padding-left:20px;">PEMASUKAN</th>
            <th>PENGELUARAN</th>
        </tr>
        <?php
            $report = array(
                array("nomor" => 1, "tanggal" => $tgl1, "kategori" => "Pembayaran Pesanan", "keterangan" =>"","pemasukan" => "Rp.".$pemasukan[0], "pengeluaran" => "-"),
                array("nomor" => 2, "tanggal" => $tgl2, "kategori" => "Pembayaran Pesanan", "keterangan" =>"gaada","pemasukan" => "Rp.".$pemasukan[1], "pengeluaran" => "-"),
                array("nomor" => 3, "tanggal" => $tgl3, "kategori" => "Pembayaran Pesanan", "keterangan" =>"","pemasukan" => "Rp.".$pemasukan[2], "pengeluaran" => "-"),
                array("nomor" => 4, "tanggal" => $tgl4, "kategori" => "Pembayaran Pesanan", "keterangan" =>"test pemasukan 090323","pemasukan" => "Rp.".$pemasukan[3], "pengeluaran" => "-"),
                array("nomor" => 5, "tanggal" => $tgl5, "kategori" => "Pembayaran Pesanan", "keterangan" =>"test pengeluaran 090323","pemasukan" => "-", "pengeluaran" => "Rp.".$pengeluaran[4]),
                array("nomor" => 6, "tanggal" => $tgl6, "kategori" => "Pembayaran Pesanan", "keterangan" =>"lunas yak","pemasukan" => "Rp.".$pemasukan[5], "pengeluaran" => "-"),
                array("nomor" => 7, "tanggal" => $tgl7, "kategori" => "Pembayaran Pesanan", "keterangan" =>"lunas yak","pemasukan" => "Rp.".$pemasukan[6], "pengeluaran" => "-"),
                array("nomor" => 8, "tanggal" => $tgl8, "kategori" => "Pinjaman Ulang", "keterangan" =>"tes","pemasukan" => "Rp.".$pemasukan[7], "pengeluaran" => "-"),
                array("nomor" => 9, "tanggal" => $tgl9, "kategori" => "Belanja Modal", "keterangan" =>"tes card tahun","pemasukan" => "Rp.".$pemasukan[8], "pengeluaran" => "-"),
                array("nomor" => 10, "tanggal" => $tgl10, "kategori" => "Pembayaran Pesanan", "keterangan" =>"","pemasukan" => "Rp.".$pemasukan[9], "pengeluaran" => "-"),
            );
            foreach($report as $subArray)
            {
        ?>
        <tr>
            <td><?php echo $subArray['nomor']; ?>.</td>
            <td><?php echo $subArray['tanggal']->format('d-m-Y'); ?></td>
            <td><?php echo $subArray['kategori']; ?></td>
            <td style="text-align: left;"><?php echo $subArray['keterangan']; ?></td>
            <td style='text-align: left;'><?php echo $subArray['pemasukan']; ?></td>
            <td style="text-align: left;"><?php echo $subArray['pengeluaran']; ?></td>
        </tr>
        <?php
            }
        ?>
        <tr>
            <td style="border-right: none;" colspan="3"></td>
            <th style="text-align: right; border-right:none; border-left: none;">TOTAL</th>
            <td style="color: green;text-align: center;"> Rp.<?php echo number_format($totalpem) ?>,-</td>
            <td style="color: red; text-align: center;"> Rp.<?php echo number_format($totalpeng) ?>,-</td>
        </tr>
        <tr>
            <td style="border-right: none;" colspan="3"></td>
            <th style="text-align: right; border-right:none; border-left: none;">SALDO</th>
            <td style="color: white;text-align: center;background: #0066CC;" colspan="2"> Rp.<?php echo number_format($saldo) ?>,-</td>
        </tr>
    </table>
</div>  
<?php
    include "footer.php";
?>