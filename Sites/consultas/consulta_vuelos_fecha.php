<?php include('../templates/header.html');   ?>

<body>

<?php
require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db
$fecha1 = $_POST["fecha1"];
$fecha2 = $_POST["fecha2"];
$query = "SELECT a.codigo_aeronave, COUNT(DISTINCT ol.operacion_id)
          FROM operacion_llegada as OL
          JOIN operacion_salida as OS
          ON OS.operacion_id = OL.operacion_id
          JOIN aeronaves1 as A
          ON OS.codigo_aeronave = A.codigo_aeronave
          WHERE OS.fecha_despegue >= '$fecha1' AND OL.fecha_arribo <= '$fecha2'
          GROUP BY A.codigo_aeronave;";
$result = $db -> prepare($query);
$result -> execute();
$viajes = $result -> fetchAll();
?>

<table align='center' class="table is-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Aeronave</th>
            <th scope="col">Numero de Viajes</th>
        </tr>
    </thead>
    <?php
    foreach ($viajes as $viaje){
        echo "<tr><td>$viaje[0]</td><td>$viaje[1]</td></tr>";
    }
    ?>
</table>

<?php include('../templates/footer.html'); ?>