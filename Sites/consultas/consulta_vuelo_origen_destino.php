
<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  ?>

  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Altura</th>
      <th>Peso</th>
      <th>Exp Base</th>
      <th>Tipo</th>
    </tr>
  <?php
  foreach ($dataCollected as $p) {
    echo "<tr> <td>$p[0]</td> <td>$p[1]</td> <td>$p[2]</td> <td>$p[3]</td> <td>$p[4]</td> <td>$p[5]</td> </tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>