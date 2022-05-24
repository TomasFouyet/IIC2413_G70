<?php include('templates/header.html');   ?>

<body>

  <h1 align="center"> Entrega 2 </h1>
  <p style="text-align:center;"> Aqui podras encontrar informacion sobre todos los vuelos</p>

  <br>
  <h2 align="center"> Vuelos Con estado pendiente
  <form align="center" action="consultas/consulta_estado_pendiente.php" method="post">
    <input type="submit" value="Buscar">
  </form><h2>

  <h2 align="center"> ¿Quieres buscar un vuelo en particular?</h2>

  <form align="center" action="consultas/consulta_vuelo_origen_destino.php" method="post">
    Origen:
    <input type="text" name="origen">
    <br/>
    Destino:
    <input type="text" name="destino">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <h2 align="center"> Pilotos con licencia vigente segun:</h2>
  <form align="center" action="consultas/consulta_piloto.php" method="post">
    Ingrese la fecha que desea analizar:
    <input type="date" name="fecha">
    <br/>
    <input type="submit" value="Buscar">
    <br/><br/>
  </form>
  <h2 align="center"> Buscar Vuelo por fechas:</h2>
  <form align="center" action="consultas/consulta_vuelos_fecha.php" method="post">
    Ingrese las fechas:
    <input type="date" name="fecha1">
    <br/>
    <input type="date" name="fecha2">
    <br>
    <input type="submit" value="Buscar">
    <br/><br/>
  </form>
  
</body>
</html>