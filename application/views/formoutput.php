<html>

<head>
 <title>Output Data Mahasiswa</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Output Data Mahasiswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>NIM Mahasiswa</td>
                <td>:</td>
                <td>
                    <?= $nim; ?>
                </td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= $tglahir; ?>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                    <?= $tmlahir; ?>
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
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?= $jeniskel; ?>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('mahasiswa');
                    ?>">Kembali Ke Halaman Input</a>
                    </td>
                </tr>
            </table>
        </center>
</body>

</html>
