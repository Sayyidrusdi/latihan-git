<html>
<head>
 <title>Tampil Data Mahasiswa</title>
</head>
<body>
    <table>
        <tr>
            <th colspan="3">
                Tampil Data Mahasiswa
            </th>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
            <th>Nim</th>
            <th>:</th>
            <td>
                <?= $nim; ?>
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
            <td>Alamat</td>
            <td>:</td>
            <td>
                <?= $alamat; ?>
            </td>
        </tr>
        <tr>
            <td>Usia</td>
            <td>:</td>
            <td>
                <?= $usia; ?>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
            <a href="<?= base_url('mahasiswa');
        ?>">Kembali</a>
            </td>
        </tr>
    </table>
</body>
</html>