<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pokemon</title>
</head>

<body>
    <div>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="">
            <div>
                <label>Masukan Nama Pokemon</label><br>
                <input type="text" class="inputan" name="nama">
            </div>
            <div>
                <label>Masukan Attack</label><br>
                <input type="number" class="inputan" name="att">
            </div>
            <div>
                <label>Masukan Defend</label><br>
                <input type="number" class="inputan" name="def">
            </div>
            <div>
                <label>Pilih type</label>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Element</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $data = $koneksi->query("SELECT * FROM element_tb");
                        while ($tampil = $data->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><input type="checkbox" name="type[]" value="<?php echo $tampil['id_element'] ?>"></td>
                                <td><?php echo $tampil['name_e'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div>
                <label>Masukan Deskripsi</label><br>
                <textarea name="desc" id="" class="inputan" cols="100" rows="10"></textarea>
            </div>
            <div>
                <label>Masukan Gambar</label><br>
                <input type="file" name="foto">
            </div>
            <br>
            <button name="input" class="btn">Tambah</button>
        </form>
        <?php
        if (isset($_POST['input'])) {
            $nama = $_POST['nama'];
            $att = $_POST['att'];
            $def = $_POST['def'];
            $desc = $_POST['desc'];
            $type = $_POST['type'];

            $foto = $_FILES['foto']['name'];
            $lokasi = $_FILES['foto']['tmp_name'];

            move_uploaded_file($lokasi, "img/" . $foto);

            $save = $koneksi->query("INSERT INTO `pokemon_tb`(`name_p`, `str`, `def`, deskripsi, `photo`) VALUES ('$nama','$att','$def','$desc','$foto')");

            $id = $koneksi->insert_id;
            foreach ($type as $no => $a) {
                $koneksi->query("INSERT INTO `pokedex_tb`(`id_pokemon`, `id_element`) VALUES ('$id','$type[$no]')");
            }


            if ($save = true) {
                echo "<script>
                window.alert('Data Berhasil Disimpan!')
                window.location = 'index.php'
                </script>";
            } else {
                echo "<script>
                 window.aler('Data Berhasil Disimpan!')
                 window.location = 'index.php'
                 </script>";
            }
        }
        ?>
    </div>

</body>

</html>