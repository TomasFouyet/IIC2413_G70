
<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  $salida = $_POST["destino"]
  $llegada = $_POST["origen"]
  $query = "SELECT DISTINCT codigos.codigo_icao,c2.codigo_icao,propuesta_de_vuelo.propuesta_vuelo_id,aerodromos.nombre,a2.nombre
            FROM codigos1 AS codigos, aerodromos, tipo vuelo, propuesta de vuelo, aerodromos AS a2, codigos1 AS
            WHERE codigo.nombre = aerodromos.nombre
            AND codigo.codigo icao LIKE '%$salida%'
            AND tipo vuelo.aerodromos salida id = aerodromo.aerodromo id
            AND propuesta de vuelo.id extra = tipo vuelo.id extra
            AND tipo vuelo.estado = 'aceptado'
            AND a2.aerodromo id = tipo vuelo.aerodromo llegada id
            AND c2.nombre = a2.nombre
            AND c2.codigo icao LIKE '%$llegada%';";
  $result = $db -> prepare($query);
  $result -> execute();
  $viajes = $result -> fetchAll();
  print_r($viajes)
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
  foreach ($viajes as $viaje) {
    echo "<tr> <td>$viaje[0]</td> <td>$viaje[1]</td> <td>$viaje[2]</td> <td>$viaje[3]</td> <td>$viaje[4]</td></tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>