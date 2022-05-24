<?php include('../templates/header.html');?>

<body>

<?php
require("../config/conexion.php");
$fecha = $_POST["fecha"];
$query = "SELECT C.certificado_id,C.fecha_habilitacion,C.fecha_termino,P.categoria,P.pasaporte
          FROM certificados as C
          JOIN pilotos as P
          ON P.certificado_id = C.certificado_id
          WHERE c.fecha_termino <= '$fecha';";
$result = $db -> prepare($query);
$result -> execute();
$certificados = $result -> fetchAll();
?>
<table align='center' class="table is-striped">
    <tr>
        <th>Certificado Id</th>
        <th>Fecha Habilitacion</th>
        <th>Fecha Termino</th>
        <th>Categoria</th>
        <th>Pasaporte</th>
    </tr>
    <?php
    foreach($certificados as $certificado){
        echo "<tr><td>$certificado[0]</td><td>$certificado[1]</td><td>$certificado[2]</td><td>$certificado[3]</td><td>$certificado[4]</td></tr>";
    }
    ?>
</table>

<?php include('../templates/footer.html'); ?>