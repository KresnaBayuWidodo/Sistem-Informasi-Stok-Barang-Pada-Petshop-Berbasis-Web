<body>
    <?php
    include "koneksi.php";

    $nomor = $_GET['nomor'];

    (isset($nomor) && empty($nomor)) ? header('location: barang.php') : '';

    $query = "SELECT * FROM barang WHERE nomor = $nomor LIMIT 1";

    $hasil_query = mysqli_query($koneksi, $query);

    $data = mysqli_fetch_assoc($hasil_query);

    empty($data) ? header('location: index.php') : '';

    ?>

    <form method="POST" action="update.php?nomor=<?=$nomor; ?>">
        <h3>Form Edit</h3>
        <a href="barang.php" type="button">Kembali</a>
        <table>
            <tr>
                <td>nomor</td>
                <td>:</td>
                <td><input type="text" name="nomor" value="<?=$data['nomor']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td>:</td>
                <td><input type="text" name="jenis_barang" value="<?=$data['jenis_barang']; ?>" required></td>
            </tr>
            <tr>
                <td>brand</td>
                <td>:</td>
                <td><input type="text" name="brand" value="<?=$data['brand']; ?>" required></td>
            </tr>
            <tr>
                <td>Berat</td>
                <td>:</td>
                <td><input type="text" name="berat" value="<?=$data['berat']; ?>" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="text" name="stok" value="<?=$data['stok']; ?>" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" value="<?=$data['harga']; ?>" required></td>
            </tr>
            <tr>
                <td colspan="6">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>