
<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  $salida = $_POST["destino"]
  $llegada = $_POST["origen"]
  $query = "SELECT DISTINCT codigos.codigo_icao,c2.codigo_icao,propuesta_de_vuelo.propuesta_vuelo_id,aerodromos.nombre,a2.nombre
  FROM codigos1 as codigos, aerodromos, tipo vuelo, propuesta de vuelo, aerodromos as a2, codigos1 as c2
  WHERE codigo.nombre = aerodromos.nombre
  and codigo.codigo icao LIKE '%$salida%'
  and tipo vuelo.aerodromos salida id = aerodromo.aerodromo id
  and propuesta de vuelo.id extra = tipo vuelo.id extra
  and tipo vuelo.estado = 'aceptado'
  and a2.aerodromo id = tipo vuelo.aerodromo llegada id
  and c2.nombre = a2.nombre
  and c2.codigo icao LIKE '%$llegada%';";
  $result = $db -> prepare($query);
  $result -> execute();
  $viajes = $result -> fetchAll();
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