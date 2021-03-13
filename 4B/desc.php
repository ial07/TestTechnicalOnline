<?php
include('koneksi.php');
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM pokedex_tb INNER Join
    pokemon_tb On pokemon_tb.id_pokemon = pokedex_tb.id_pokemon INNER Join
    element_tb On element_tb.id_element = pokedex_tb.id_element WHERE pokemon_tb.id_pokemon = '$id'")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deskripsi Pokemon</title>
    <link rel="stylesheet" href="poke.css">
</head>

<body>
    <div class="container">
        <footer>
            <ul>
                <li>
                    <img src="img/<?php echo $data['photo'] ?>" width="500px" height="500px" alt="">
                    <?php
                    $data1 = $koneksi->query("SELECT * FROM pokedex_tb INNER Join
    pokemon_tb On pokemon_tb.id_pokemon = pokedex_tb.id_pokemon INNER Join
    element_tb On element_tb.id_element = pokedex_tb.id_element WHERE pokedex_tb.id_pokemon = $data[id_pokemon]");

                    while ($up = $data1->fetch_assoc()) {
                    ?>

                        <f5 style="background-color: gray; color:white; padding:15px; border-radius:10px; font-weight: bold; font-size: 20px;"><?php echo $up['name_e'] ?></f5>
                    <?php } ?>
                    <br><br>
                    <h2>Deskripsi</h2>
                    <f2 style="color:black; padding:15px; border-radius:10px; font-weight: bold; font-size: 20px;"><?php echo $data['deskripsi'] ?></f2>
                </li>
            </ul>
        </footer>
    </div>

</body>

</html>