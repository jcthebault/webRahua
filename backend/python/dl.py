import json

calles_path = 'C:\\Users\\julio\\OneDrive\\TeclabProg\\15_PRACTICAS_PRFO\\Proyectos\\webRahua\\backend\\json\\local_munic.json'

# Abrir el archivo local_munic.json y cargar los datos con la codificación adecuada
with open(calles_path, 'r', encoding='utf-8') as f:
    # Cargar los datos directamente sin decodificación
    calles_data = json.load(f)

# Eliminar la información de provincia y departamento
for calle in calles_data:
    calle.pop("provincia", None)
    calle.pop("departamento", None)
    calle.pop("municipio", None)

# Guardar el resultado en un nuevo archivo con la codificación adecuada
with open('sin_info.json', 'w', encoding='utf-8') as f:
    json.dump(calles_data, f, ensure_ascii=False, indent=4)
