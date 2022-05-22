from csv import writer

certificados = []
aeronaves = []


with open("certificados.csv", "r", encoding="utf-8") as file:
    for linea in file:
        line = linea.strip().split(",")
        if 'piloto' in line[7]:
            certificados.append((line[0], line[1], line[2], line[7], line[8]))
        else:
            aeronaves.append((line[0], line[1], line[2], line[3], line[4], line[5], line[6]))

# with open("aeronaves.csv", "w", newline='') as archivo:
#     writer = writer(archivo, delimiter=',')
#     for i in range(len(aeronaves)):
#         values2 = aeronaves[i][0],aeronaves[i][6]
#         writer.writerow(values2)

general = []
with open("certificados.csv", "r", encoding="utf-8") as file:
    for linea in file:
        line = linea.strip().split(",")
        general.append(line)

# with open("certificados2.csv", "w", newline='') as archivo:
#     writer = writer(archivo, delimiter=',')
#     for i in range(len(general)):
#         values2 = general[i][0],general[i][1],general[i][2]
#         writer.writerow(values2)

# with open("especificaciones.csv", "w", newline='') as archivo:
#     writer = writer(archivo, delimiter=',')
#     for i in range(len(aeronaves)):
#         values2 = aeronaves[i][6],aeronaves[i][3],aeronaves[i][4],aeronaves[i][5]
#         writer.writerow(values2)

with open("pilotos.csv", "w", newline='') as archivo:
    writer = writer(archivo, delimiter=",")
    for i in range(len(general)):
        if 'piloto' in general[i][7]:
            values = general[i][0],general[i][7],general[i][8]
            writer.writerow(values)