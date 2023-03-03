<html>
    <head>
        <h1>menampilkan tabel</h1>
    </head>

    <body>
        <h3>data mobil</h3>
        <table border="1" class="table">
            <tr>
                <th>id_mobil</th>
                <th>stnk</th>
                <th>jenis_mobil</th>
                <th>harga_mobil</th>
            </tr>
        </table>
    </body>
</html>

<?php
    include "koneksi.php";
    $query_mysql = mysqli_query($host,"SELECT * FROM mobil")or die(mysqli_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['id_mobil'];?></td>
        <td><?php echo $data['stnk'];?></td>
        <td><?php echo $data['jenis_mobil'];?></td>
        <td><?php echo $data['harga_mobil'];?></td>
    </tr>
    <?php } ?>