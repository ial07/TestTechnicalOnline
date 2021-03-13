<?php
include("koneksi.php");
$data = $koneksi->query("SELECT * FROM pokedex_tb INNER Join
    pokemon_tb On pokemon_tb.id_pokemon = pokedex_tb.id_pokemon INNER Join
    element_tb On element_tb.id_element = pokedex_tb.id_element GROUP BY pokemon_tb.id_pokemon");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 4</title>
    <link rel="stylesheet" href="poke.css">
</head>

<body>


    <div class="container">
        <div id="content">
            <h1>PokeDumb Find</h1>
        </div>
        <div class="btn">
            <a href="add_pokemon.php">Add Pokemon</a>
            <a href="add_element.php">Add Element</a>
        </div>
    </div>

    <footer>
        <ul>
            <?php
            while ($tampil = $data->fetch_assoc()) {
            ?>
                <li>
                    <img src="img/<?php echo $tampil['photo'] ?>" width="300px" height="300px" alt="">
                    <span> <a href="desc.php?id=<?php echo $tampil['id_pokemon'] ?>"> <?php echo $tampil['name_p'] ?></a></span>
                    <?php
                    $data1 = $koneksi->query("SELECT * FROM pokedex_tb INNER Join
    pokemon_tb On pokemon_tb.id_pokemon = pokedex_tb.id_pokemon INNER Join
    element_tb On element_tb.id_element = pokedex_tb.id_element WHERE pokedex_tb.id_pokemon = $tampil[id_pokemon]");

                    while ($up = $data1->fetch_assoc()) {
                    ?>

                        <f5 style="background-color: gray; color:white; padding:5px; border-radius:10px; font-weight: bold;"><?php echo $up['name_e'] ?></f5>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </footer>
</body>

</html>