<?php include('../templates/header.html');?>

<body>

  <?php
  require("../config/conexion.php");

  $query = "SELECT * FROM propuesta_de_vuelo as PV JOIN tipo_vuelo as TV ON PV.id_extra = TV.id_extra WHERE TV.esatdo = 'pendiente'";
  $result = $db -> prepare($query);
  $result -> execute();
  $vuelo = $result -> fetchAll()

  ?>

<?php include('../templates/footer.html');?>