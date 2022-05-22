from csv import writer

rutas = []

with open("rutas.csv", "r", encoding="utf-8") as file:
    for linea in file:
        line = linea.strip().split(",")
        rutas.append((line[0], line[1], line[2], line[3], line[4], line[5]))



# rutas.pop(0)
# with open("nombre_ruta.csv", "w", newline='') as file:
#     writer = writer(file, delimiter=",")
#     for i in range(len(rutas)):
#         values = rutas[i][0],rutas[i][1]
#         writer.writerow(values)

# with open("punto_ruta.csv", "w", newline='') as file2:
#     writer = writer(file2, delimiter=",")
#     for i in range(len(rutas)):
#         values2 = rutas[i][3],rutas[i][4],rutas[i][5]
#         writer.writerow(values2)

# with open("puntos.csv", "w", newline='') as file3:
#     writer = writer(file3, delimiter=",")
#     for i in range(len(rutas)):
#         values3 = rutas[i][0],rutas[i][3],rutas[i][2]
#         writer.writerow(values3)