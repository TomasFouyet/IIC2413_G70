
<?php include('../templates/header.html');   ?>

<body>

<?php
require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db
$salida = $_POST["origen"];
$llegada = $_POST["destino"];
$query = "SELECT DISTINCT codigos.codigo_icao,c2.codigo_icao,propuesta_de_vuelo.propuesta_vuelo_id,aerodromos.nombre,a2.nombre
          FROM codigos1 AS codigos, aerodromos, tipo_vuelo, propuesta_de_vuelo, aerodromos AS a2, codigos1 AS c2
          WHERE codigos.nombre = aerodromos.nombre AND codigos.codigo_icao LIKE '%$llegada%' AND tipo_vuelo.aerodromo_salida_id = aerodromos.aerodromo_id AND propuesta_de_vuelo.id_extra = tipo_vuelo.id_extra AND tipo_vuelo.estado = 'aceptado' AND a2.aerodromo_id = tipo_vuelo.aerodromo_llegada_id AND c2.nombre = a2.nombre AND c2.codigo_icao LIKE '%$salida%';";
print_r($query);
$result = $db -> prepare($query);
$result -> execute();
$viajes = $result -> fetchAll();
print_r($viajes);
?>

<table>
    <tr>
        <th>Salida</th>
        <th>LLegada</th>
        <th>Propuesta de vuelo</th>
        <th>Aerodromo Salida</th>
        <th>Aerodromo Llegada</th>
    </tr>
    <?php
    foreach ($viajes as $viaje){
        echo "<tr> <td>$viaje[0]</td><td>$viaje[1]</td><td>$viaje[2]</td><td>$viaje[3]</td><td>$viaje[4]</td></tr>";
    }
    ?>
</table>

<?php include('../templates/footer.html'); ?>