from csv import writer


aeronaves = []
certificados = []

with open("certificados.csv", "r", encoding="utf-8") as file:
    for linea in file:
        line = linea.strip().split(",")
        if 'piloto' in line[7]:
            certificados.append((line[0], line[7], line[8]))
        else:
            aeronaves.append((line[0], line[1], line[2], line[3], line[4], line[5], line[6]))

#aeronaves.pop(0)
#certificados.pop(0)
with open("certificados2.csv", "w", newline='') as file:
    writer = writer(file, delimiter=',')
    for i in range(len(certificados)):
        values = certificados[i][0],certificados[i][1],certificados[i][2],certificados[i][3],certificados[i][4]
        writer.writerow(values)

