<?php include('../templates/header.html');?>

<body>

<?php
require("../config/conexion.php");

$query = ""
$result = $db -> prepare($query);
$result -> execute();
$pares = $result -> fetchAll();
?>
<table align='center' class="table is-striped">
    <tr>
        <th>piloto</th>
        <th>copiloto</th>

    </tr>
    <?php
    foreach($pares as $par){
        echo "<tr><td>$par[0]</td><td>$par[1]</td></tr>";
    }
    ?>
</table>

<?php include('../templates/footer.html'); ?>