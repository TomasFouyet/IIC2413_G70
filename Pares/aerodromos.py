aerodromos = []
app = []  # Esta es la tabla de aerodromo_id, pista, puerto_embarque
with open("aerodromosV2.csv", "r", encoding="utf-8") as archivo:
    for linea in archivo:
        line = linea.strip().split(',')
        aerodromos.append((line[0], line[1].replace("'", ""), line[2], line[3], line[4],
                          line[5], line[6], line[7]))
        app.append((line[0], line[8], line[9]))


aerodromos.pop(0)
app.pop(0)
for i in range(len(aerodromos)):
    escribir = 'insert into aerodromos (aerodromo_id, nombre, codigo_ICAO, codigo_IATA, latitud, longitud, nombre_ciudad, nombre_pais) values '
    values = f"({aerodromos[i][0]}, \'{aerodromos[i][1]}\', \'{aerodromos[i][2]}\', \'{aerodromos[i][3]}\', {aerodromos[i][4]}, {aerodromos[i][5]}, \'{aerodromos[i][6]}\', \'{aerodromos[i][7]}\');\n"
    with open("aerodromos.sql", "a", encoding="utf-8") as file:
        file.write(escribir + values)

for i in range(len(aerodromos)):
    escribir2 = 'insert into aerodromos (aerodromo_id, codigo_pista, codigo_puerta_embarque) values '
    values2 = f"({app[i][0]}, \'{app[i][1]}\', \'{app[i][2]}\');\n"
    with open("app.sql", "a", encoding="utf-8") as file:
        file.write(escribir2 + values2)
