***CREACION DE TABLAS CON LA TERMINAL:***

primero debemos crear la base de datos local:

empezamos con el comando en la consola=mysql -u campus -p

contraseña= campus2023

![1687989369262](image/README/1687989369262.png)

primero debimos borrar una base de datos anterior que se llamaba igual a la nuestra, con el comando Drop,

verificamos que se haya creafdo nuestra base de datos:

![1687989648725](image/README/1687989648725.png)

luego creamos la base de datos con el comando CREATE DATABASE campuslands;

luego creamos cada tabla:

-Con el comando USE campuslands le ordenamos que use nuestra base de datos para la posterior creacion de las tablas

-Con el comando CREATE TABLE pais Creamos la tabla 1

-luego la tabla 2 y 3:

![1687989766372](image/README/1687989766372.png)

y por ultimo la tabla 4:

![1687989824103](image/README/1687989824103.png)

__________________________________________________________________________________________________________________________________

***PRUEBA DE CRUD CON THUNDER CLIENT:***

Con la solicitud GET y el endpoint campus obtenemos los datos de la tabla campers:

![1687990450713](image/README/1687990450713.png)

Con la solicitud DELETE y el idCamper eliminamos uno de nuestros campers:

![1687990535781](image/README/1687990535781.png)

Con la solicitud POST INGRESAMOS la informacion:

![1687991790062](image/README/1687991790062.png)

con la solicitud PUT editamos:

![1687991859807](image/README/1687991859807.png)
