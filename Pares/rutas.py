rutas = []

with open("rutas.csv", "r", encoding="utf-8") as file:
    for linea in file:
        line = linea.strip().split(",")
        rutas.append((line[0], line[1], line[2], line[3], line[4], line[5]))

rutas.pop(0)
for i in range(len(rutas)):
    escribir = 'insert into rutas (rutas_id, nombre_ruta, cardinalidad, nombre_punto, latitud, longitud) values '
    values = f"({rutas[i][0]}, \'{rutas[i][1]}\', {rutas[i][2]}, \'{rutas[i][3]}\', {rutas[i][4]}, {rutas[i][5]});\n"
    with open("rutas.sql", "a", encoding="utf-8") as file:
        file.write(escribir + values)
