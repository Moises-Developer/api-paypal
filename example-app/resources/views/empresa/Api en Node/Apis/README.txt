# END-POINTS PARA EL PERFECTO USO DEL API

# LOCALHOST:<PORT>/api/ <- URL to connect

# HORA DIFERENTES END-POINTS 

# URL/
{
    "status" : "ok",
    "message" : "hola mundo"
}

-----------------------------------------------------------------------------------------------

# URL/conrobot/saludar
{
    "status" : "ok",
    "message" : "Hola, Como estas?"
}

-------------------------------------------------------------------------------------------------

# URL/conrobot/ayudar

# Primer param

# Enviar
{
    "message" : "Necesito informes"
}

# Respuesta
{
    "status": "ok",
    "message": "this company is one of the most important in the market",
    "telephone": "3315477545",
    "facebook": "software company",
    "email": "softwareCompany@gmail.com"
}

-------------------------------------------------------------------------------------------------

# URL/conrobot/ayudar

# Primer param

# Enviar
{
    "message" : "Quiero saber mi usuario",
    "username" : <user of database>
}

# Respuesta
{
    "status" : "ok",
    "message" : "user found",
    "information", <[array with info of database]>
}

-------------------------------------------------------------------------------------------------------------------

# URL/conrobot/ayudar

# Primer param

# Enviar
{
    "message" : "Ocupo ver algunos articulos"
}

# Respuesta
{
    "status" : "ok",
    "message" : "articles found successfully"
    "information" : <array with info of articles>
}

-------------------------------------------------------------------------------------------------------------------

# URL/conrobot/ayudar

# Primer param

# Enviar
{
    "message" : "Ocupo ver algunos articulos",
    "articles" : <article of database>
}

# Respuesta
{
    "status" : "ok",
    "message" : "good connection",
    "information" : <article in database>
}