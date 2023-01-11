<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <h3>Form Tambah</h3>
    <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama"/>
                </p>
                <p>
                    <label for="kelas">Kelas :</label>
                    <input type="text" name="kelas">
                </p>
                <p>
                    <label for="jurusan">Jurusan :</label>
                    <select name="jurusan">
                    <option value="RPL">RPL </option>
                    <option value="Busana">Busana </option>
                    <option value="Bogo">Boga </option>
                    <option value="TSM">TSM </option>
                    <option value="TL">TL </option>
</select>
                </p>
                <p>
                    <label for="tahun">Tahun :</label>
                    <input type="int" name="tahun" />
                </p>
                <p>
                    <label for="nominal">Nominal :</label>
                    <input type="text" name="nominal"/>
                </p>
                <p>
                    <input type="submit" value="Tambah" name="tambah"/>
                </p>
</fieldset>

    
</body>
</html>