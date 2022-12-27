<body>
    <?php
    include "koneksi.php";

    $id_barang = $_GET['id_barang'];

    (isset($id_barang) && empty($id_barang)) ? header('location: laporan.php') : '';

    $query = "SELECT * FROM laporan WHERE id_barang = $id_barang LIMIT 1";

    $hasil_query = mysqli_query($koneksi, $query);

    $data = mysqli_fetch_assoc($hasil_query);

    empty($data) ? header('location: laporan.php') : '';

    ?>

    <form method="POST" action="update_laporan.php?id_barang=<?=$id_barang; ?>">
        <h3>Form Edit</h3>
        <a href="laporan.php" type="button">Kembali</a>
        <table>
            <tr>
                <td>id_barang</td>
                <td>:</td>
                <td><input type="text" name="id_barang" value="<?=$data['id_barang']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="Tanggal" value="<?=$data['Tanggal']; ?>" required></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nm_barang" value="<?=$data['nm_barang']; ?>" required></td>
            </tr>
            <tr>
                <td>Brand</td>
                <td>:</td>
                <td><input type="text" name="Merk" value="<?=$data['Merk']; ?>" required></td>
            </tr>
            <tr>
                <td>masuk</td>
                <td>:</td>
                <td><input type="text" name="masuk" value="<?=$data['masuk']; ?>" required></td>
            </tr>
            <tr>
                <td>keluar</td>
                <td>:</td>
                <td><input type="text" name="keluar" value="<?=$data['keluar']; ?>" required></td>
            </tr>
            <tr>
                <td colspan="6">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>