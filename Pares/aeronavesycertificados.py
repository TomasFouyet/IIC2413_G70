aeronaves = []
certificados = []

with open("certificados.csv", "r", encoding="utf-8") as file:
    for linea in file:
        line = linea.strip().split(",")
        if 'piloto' in line[7]:
            certificados.append((line[0], line[1], line[2], line[7], line[8]))
        else:
            aeronaves.append((line[0], line[1], line[2], line[3], line[4], line[5], line[6]))

aeronaves.pop(0)
certificados.pop(0)

for i in range(len(certificados)):
    escribir = 'insert into certificados (certificado_id, fecha_habilitacion, fecha_termino, categoria, pasaporte) values '
    values = f"({certificados[i][0]}, \'{certificados[i][1]}\', \'{certificados[i][2]}\', \'{certificados[i][3]}\', \'{certificados[i][4]}\');\n"
    with open("certificados.sql", "a", encoding="utf-8") as file:
        file.write(escribir + values)

for i in range(len(aeronaves)):
    escribir2 = 'insert into aeronaves (certificado_id, fecha_habilitacion, fecha_termino, nombre_aeronave, modelo_aeronave, codigo_aeronave) values '
    values2 = f"({aeronaves[i][0]}, \'{aeronaves[i][1]}\', \'{aeronaves[i][2]}\', \'{aeronaves[i][3]}\', \'{aeronaves[i][4]}\', \'{aeronaves[i][5]}\');\n"
    with open("aeronaves.sql", "a", encoding="utf-8") as file:
        file.write(escribir2 + values2)
