# crudBase
Este proyecto tiene como fin dar a conocer las bases de un CRUD realizado con php y mysql.


## Uso del entorno de desarrollo Homestead [Referencia](https://simplecodetips.wordpress.com/2018/09/13/setup-con-laravel-homestead-y-vagrant-en-ubuntu-18-04/)
Este proyecto tiene un entorno de homestead local. Pasos para levantar el proyecto:

1.Configurar el archivo **Homestead.yalm**. 

2.Dentro de la carpeta del poyecto ejecutar `vagrant up`

3.Abra su navegador de preferencia y escriba el nombre de la maquina virtual `crudbase.test`

### Conexion a base de datos. 
Dejo un blog de referencia que explica mejor este tema. [Referencia](https://desarrolloweb.com/articulos/bases-datos-laravel.html)

## Uso de un entorno diferente al de Homestead
Solo necesita copiar y pegar (en su entorno) los siguientes archivos y carpetas:

* config/
* model/
* template/
* index.php
* deleteView.php
* readView.php
* updateView.php

