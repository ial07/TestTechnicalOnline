<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Element</title>
</head>

<body>
    <div>
        <form method="POST">
            <div>
                <label>Masukan Element</label>
                <input type="text" name="elem">
            </div>
            <button name="input">Tambah</button>
        </form>
        <?php
        include('koneksi.php');
        if (isset($_POST['input'])) {
            $elem = $_POST['elem'];

            $save = $koneksi->query("INSERT INTO `element_tb`(`name_e`) VALUES ('$elem')");

            if ($save = true) {
                echo " <script>
                window.alert('Data Berhasil Disimpan!')
                window.location = 'index.php'
                </script>";
            } else {
                echo " <script>
                 window.aler('Data Berhasil Disimpan!')
                 window.location = 'index.php'
                 </script>";
            }
        }
        ?>
    </div>
</body>

</html>