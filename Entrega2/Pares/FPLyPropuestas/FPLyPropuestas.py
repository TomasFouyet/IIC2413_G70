from csv import writer

FPL = []
tipo_vuelo = []
general = []

with open('FPLyPropuestas.csv', "r", encoding="utf-8") as file:
    i = 0
    for line in file:
        propuesta = line.strip().split(",")
        general.append(propuesta)
        # if propuesta[0] is not "":
        #     FPL.append((propuesta[0], propuesta[15], propuesta[16], propuesta[17], propuesta[18], propuesta[19], propuesta[20], propuesta[21], propuesta[22], i))
        #     i += 1
        # elif propuesta[1] is not "":
        #     tipo_vuelo.append((propuesta[1], propuesta[2], propuesta[4], propuesta[5], propuesta[6], propuesta[7], propuesta[11]))


# with open("Companias.csv", "w", newline='') as file:
#     writer = writer(file, delimiter=',')
#     for i in range(len(general)):
#         values = general[i][13],general[i][14]
#         writer.writerow(values)


# with open("propuesta_de_vuelo.csv", "w", newline='') as file:
#     writer = writer(file, delimiter=',')
#     for i in range(len(general)):
#         values = general[i][1],general[i][14],general[i][12],i
#         writer.writerow(values)

with open("tipo_vuelo.csv", "w", newline='') as file:
    writer = writer(file, delimiter=',')
    for i in range(len(general)):
        values2 = general[i][2],general[i][3],general[i][4],general[i][5],general[i][6],general[i][7],general[i][11],i
        writer.writerow(values2)

# with open("FPL.csv", "w", newline='') as file:
#     writer = writer(file, delimiter=',')
#     for i in range(len(general)):
#         values = general[i][0],general[i][15],general[i][16],general[i][17],general[i][18],general[i][19],general[i][20],general[i][21],general[i][22],i
#         writer.writerow(values)