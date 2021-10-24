<html>
<head>
 <title>Tampil Data Transaksi</title>
</head>
<body>
    <table>
        <tr>
            <th colspan="3">
                Tampil Data Transaksi
            </th>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <?= $nama; ?>
            </td>
        </tr>
        <tr>
            <td>No HP</td>
            <td>:</td>
            <td>
                <?= $no; ?>
            </td>
        </tr>
        <tr>
            <td>Sepatu</td>
            <td>:</td>
            <td>
                <?= $merk; ?>
            </td>
        </tr>
        <tr>
            <td>Ukuran</td>
            <td>:</td>
            <td>
                <?= $ukuran; ?>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
            <a href="<?= base_url('sepatu');
            ?>">Kembali</a>
            </td>
        </tr>
    </table>
</body>
</html>