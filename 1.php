<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
    <link rel="stylesheet" href="soal.css">
</head>

<body>
    <div class="body">
        <label class="so1">SOAL No 1</label>
        <h3>Di suatu penangkaran terdapat 9.999 kura-kura berjenis sulcatar. Setiap 90 hari kura-kura tersebut serempak melahirkan satu kura-kura baru. Namun sebelum melahirkan, 21,1% dari kura-kura tersebut mati. Buatkan lah sebuah program untuk menghitung dan mengetahui jumlah kura-kura setelah 365 hari.</h3>
        <form method="POST">
            <button name="hasil" class="btn" onclick="tampil()">Lihat Hasil</button>
        </form>
        <?php
        $tawal = 9999;
        $mper = 21.2 / 100;
        $m90 = $tawal * $mper;
        $tinggal90 = $tawal - $m90;
        $hari90 = $tinggal90 * 2;
        $m180 = $hari90 * $mper;
        $tinggal180 = $hari90 - $m180;
        $hari180 = $tinggal180 * 2;
        $m270 = $hari180 * $mper;
        $tinggal270 = $hari180 - $m270;
        $hari270 = $tinggal270 * 2;
        $m360 = $hari270 * $mper;
        $tinggal360 = $hari270  - $m360;
        $hari360 = $tinggal360 * 2;

        ?>
        <div class="hasil">
            <h3>Hari awal di penangkaran banyak kura-kura = <?php echo $tawal ?> ekor</h3>
            <h3>setelah 89 hari 21,1% kura-kura mati, sehingga kura-kura menjadi sekitar <?php echo floor($tinggal90) ?> ekor</h3>
            <h3>setelah hari ke-90 kura-kura menjadi 2x dari hari sebelumnya menjadi sekitar <?php echo floor($hari90) ?> ekor </h3>
            <h3>kemudian pada hari ke-179, kura-kura mati sebanyak 21,1% menjadi sekitar <?php echo floor($tinggal180) ?> ekor lagi</h3>
            <h3>setelah hari ke 180 kura-kura menjadi 2x dari jumlah sebelumnya menjadi sekitar <?php echo floor($hari180) ?> ekor</h3>
            <h3>kemudian pada hari ke-269, kura-kura mati sebanyak 21,1% menjadi sekitar <?php echo floor($tinggal270) ?> ekor lagi</h3>
            <h3>setelah hari ke 270 kura-kura menjadi 2x dari jumlah sebelumnya menjadi sekitar <?php echo floor($hari270) ?> ekor</h3>
            <h3>kemudian pada hari ke-359, kura-kura mati sebanyak 21,1% lagi menjadi sekitar <?php echo floor($tinggal360) ?> ekor lagi, dan</h3>
            <h3>setelah hari ke 360 kura-kura menjadi sekitar <b style="color: black; background-color: white;"><?php echo floor($hari360) ?></b> ekor</h3>
        </div>
    </div>

    <script>
        var btn = document.getElementsByClassName('btn');
        var hasil = document.getElementsByClassName('hasil');

        hasil[0].hidden = true;

        btn[0].addEventListener('click', function(e) {
            e.preventDefault();
            hasil[0].hidden = false;
        });
    </script>
</body>

</html>