<?php include('../templates/header.html');?>

<body>

<?php
require("../config/conexion.php");
$fecha = $_POST["fecha"];
print_r($fecha);
$query = "SELECT *
          FROM certificados2 as C
          JOIN pilotos as P
          ON P.certificado_id = C.certificado_id
          WHERE c.fecha_termino < '$fecha';";
$result = $db -> prepare($query);
$result -> execute();
$certificados = $result -> fetchAll();
?>
<table>
    <tr>
        <th>Id de la propuesta</th>
        <th>Compania</th>
        <th>Fecha Enviholao Propuesta</th>
        <th>Estado</th>
        <th>Fecha Salida</th>
        <th>Fecha Llegada</th>
        <th>aerodromo salida</th>
        <th>aerodromo llegada</th>
    </tr>
    <?php
    ?>
</table>

<?php include('../templates/footer.html'); ?>