<html>

<head>
    <title>Form Input Mahasiswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('mahasiswa/proses'); ?>"
method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Input Data Mahasiswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
            <hr>
            </td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>:</td>
                <td>
                    <input type="text" name="nim" id="nim" placeholder='Input NIM'>
                </td>
            </tr>
            <tr>
                <th>Nama Mahasiswa</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama" placeholder='Input Nama Mahasiswa'>
            </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="kelas" id="kelas" placeholder='Input Kelas'>
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tglahir" id="tglahir" placeholder='Input Tanggal lahir'>
                </td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tmlahir" id="tmlahir" placeholder='Input Tempat Lahir'>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" id="alamat" placeholder='Input Alamat'>
            </td>
            </tr>
        
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" name="jeniskel" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jeniskel" value="Perempuan"> Perempuan
                </select>
            </td>
        </tr>
        <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                    <option value="">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="Proses">
                <input type="reset" value="Cancel">
            </td>
        </tr>
    </table>
</form>
</center>
</body>

</html>