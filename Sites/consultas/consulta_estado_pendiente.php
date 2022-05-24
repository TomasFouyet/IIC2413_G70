<?php include('../templates/header.html');?>

<body>

<?php
require("../config/conexion.php");

$query = "SELECT *
          FROM propuesta_de_vuelo as PV
          JOIN tipo_vuelo as TV
          ON PV.id_extra = TV.id_extra;";
$result = $db -> prepare($query);
$result -> execute();
$vuelos = $result -> fetchAll();
print_r($vuelos);
?>
<table>
    <tr>
        <th>Id de la propuesta</th>
        <th>Compania</th>
        <th>Fecha Envio Propuesta</th>
        <th>Estado</th>
        <th>Fecha Salida</th>
        <th>Fecha Llegada</th>
        <th>aerodromo salida</th>
        <th>aerodromo llegada</th>
    </tr>
    <?php
    foreach($vuelos as $vuelo){
        echo "<tr><td>$vuelo[0]</td><td>$vuelo[1]</td><td>$vuelo[2]</td><td>$vuelo[3]</td><td>$vuelo[4]</td><td>$vuelo[5]</td><td>$vuelo[6]</td><td>$vuelo[7]</td></tr>";
    }
    ?>
</table>

<?php include('../templates/footer.html'); ?>