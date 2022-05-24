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
print_r($certificados);
?>
<table>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php
    ?>
</table>

<?php include('../templates/footer.html'); ?>