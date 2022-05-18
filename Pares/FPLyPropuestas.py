import csv

archivo = []

with open('FPLyPropuestas.csv', "r") as file:
    for linea in file:
        propuesta = linea.strip().split(",")
        archivo.append({
            'FPL_id': propuesta[0],
            'Vuelo_id': propuesta[1],
            'Estado': propuesta[2],
            'Codigo': propuesta[3],
            'Fecha_out': propuesta[4],
            'Fecha_in': propuesta[5],
            'Aerodromo_out': propuesta[6],
            'Aerodromo_in': propuesta[7],
            'Aeronave': propuesta[8],
            'Modelo': propuesta[9],
            'Peso': propuesta[10],
            'Codigo_aeronave': propuesta[11],
            'Fecha_envio': propuesta[12],
            'Compañia': propuesta[13],
            'Codigo_compañia': propuesta[14],
            'Ruta_id': propuesta[15],
            'Velocidad': propuesta[16],
            'Altitud': propuesta[17],
            'Tipo_vuelo': propuesta[18],
            'Max pasajeros': propuesta[19],
            'Realizado?': propuesta[20],
            'Pasaporte Piloto': propuesta[21],
            'Pasaporte Co-Piloto': propuesta[22],
        })
print(archivo[20])
print("--------------------------------------------------------------------")
print(archivo[21])
