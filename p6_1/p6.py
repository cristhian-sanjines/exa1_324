import psycopg2 as ps
def f(x):
    if(x == None):
        return x
    else:
        return round(x)
try:
    conexion = ps.connect(
        host='localhost',
        user='postgres',
        password='123456',
        database='bd_cristhiansanjines'
    )
    print('Conexion exitosa')
    cursor = conexion.cursor()
    #cursor.execute("Select * from v4")
    query = (
        "Select avg(case when xp.iddepartamento=02 then (xi.notafinal) end) LP, avg(case when xp.iddepartamento=03 then (xi.notafinal) end) CB, avg(case when xp.iddepartamento=04 then(xi.notafinal) end) OR, avg(case when xp.iddepartamento=08 then(xi.notafinal) end) BE from Persona xp, Inscripcion xi where xp.ci=xi.ciestudiante"
    )
    cursor.execute(query)
    rows = cursor.fetchall()
    for row in rows:
        print(
            f'LP={f(row[0])}',
            f'CB={f(row[1])}',
            f'OR={f(row[2])}',
            f'BE={f(row[3])}',
        )

except Exception as ex:
    print(ex)
finally:
    conexion.close()
    print('conexion finalizada')

"""
para ejecutar en el terminal:
    python .\p6_1\p6.py
"""

    