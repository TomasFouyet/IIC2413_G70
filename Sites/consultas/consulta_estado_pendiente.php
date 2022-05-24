<?php include('../templates/header.html');?>

<body>

<?php
  require("../config/conexion.php");

  $query = "SELECT propuesta_vuelo_id, codigo_compania, fecha_envio_propuesta, estado, fecha_salida, fecha_llegada, aerodromo_llegada_id, aerodromo_salida_id FROM propuesta_de_vuelo as PV JOIN tipo_vuelo as TV ON PV.id_extra = TV.id_extra WHERE TV.esatdo = 'pendiente'";
  $result = $db -> prepare($query);
  $result -> execute();
  $vuelos = $result -> fetchAll();

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

<?php include('../templates/footer.html');?>