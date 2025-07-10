<h1>Ejercicio 16</h1>
<?php

    /* Crea un array con el contenido de la siguiente data_table
    Frutas  - Deportes   - Idiomas
    Manzana - Fútbol     - Español
    Naranja - Tenis      - Inglés
    Sandia  - Baloncesto - Francés
    Fresa   - Béisbol    - Italiano*/

    $data_table = [
        "Frutas" => [
            "Manzana",
            "Naranja",
            "Sandia",
            "Fresa"],
        "Deportes" => [
            "Fútbol",
            "Tenis",
            "Baloncesto",
            "Béisbol"],
        "Idiomas" => [
            "Español",
            "Inglés",
            "Francés",
            "Italiano"]
    ];
    
    var_dump($data_table)

?>

<table border="1">
    <tr>
        <th><?="Frutas"?></th>
        <th><?="Deportes"?></th>
        <th><?="Idiomas"?></th>
    </tr>
    <tr>
        <th><?=$data_table["Frutas"][0]?></th>
        <th><?=$data_table["Deportes"][0]?></th>
        <th><?=$data_table["Idiomas"][0]?></th>
    </tr>
    <tr>
        <th><?=$data_table["Frutas"][1]?></th>
        <th><?=$data_table["Deportes"][1]?></th>
        <th><?=$data_table["Idiomas"][1]?></th>
    </tr>
    <tr>
        <th><?=$data_table["Frutas"][2]?></th>
        <th><?=$data_table["Deportes"][2]?></th>
        <th><?=$data_table["Idiomas"][2]?></th>
    </tr>
    <tr>
        <th><?=$data_table["Frutas"][3]?></th>
        <th><?=$data_table["Deportes"][3]?></th>
        <th><?=$data_table["Idiomas"][3]?></th>
    </tr>
</table>