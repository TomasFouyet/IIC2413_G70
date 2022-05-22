from csv import writer


general = []
with open('operaciones.csv', "r", encoding="utf-8") as file:
    for line in file:
        operacion = line.strip().split(",")
        general.append(operacion)

# with open("operacion_llegada.csv", "w", newline='') as file:
#     writer = writer(file, delimiter=',')
#     for i in range(len(general)):
#         values = general[i][0],general[i][1],general[i][3],general[i][4],general[i][5],general[i][6],general[i][13]
#         writer.writerow(values)

with open("operacion_salida.csv", "w", newline='') as file:
    writer = writer(file, delimiter=',')
    for i in range(len(general)):
        values = general[i][0],general[i][1],general[i][2],general[i][7],general[i][8],general[i][9],general[i][13]
        writer.writerow(values)