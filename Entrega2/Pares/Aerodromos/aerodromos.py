from csv import writer

aerodromos = []
aerodromos2 = []
app = []  # Esta es la tabla de aerodromo_id, pista, puerto_embarque
with open("aerodromosV2.csv", "r", encoding="utf-8") as archivo:
    for linea in archivo:
        line = linea.strip().split(',')
        aerodromos.append((line[0], line[1].replace("'", ""), line[2], line[3], line[4],
                          line[5], line[6], line[7]))
        app.append((line[0], line[8], line[9]))


#aerodromos.pop(0)
#app.pop(0)
# with open("aerodromos.csv", "w", newline="", encoding="utf-8") as file:
#     writer = writer(file, delimiter=',')
#     for i in range(len(aerodromos)):
#         values = aerodromos[i][0],aerodromos[i][1],aerodromos[i][2],aerodromos[i][3],aerodromos[i][4],aerodromos[i][5],aerodromos[i][6]
#         writer.writerow(values)

# with open("APP.csv", "w", newline="", encoding="utf-8") as file:
#     writer = writer(file, delimiter=',')
#     for i in range(len(app)):
#         values2 = app[i][0],app[i][1],app[i][2]
#         writer.writerow(values2)

with open("pais_ciudad.csv", "w", newline="", encoding="utf-8") as file:
    writer = writer(file, delimiter=',')
    for i in range(len(aerodromos)):
        values2 = aerodromos[i][6], aerodromos[i][7]
        writer.writerow(values2)