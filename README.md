# Instrucciones para configurar un proyecto CRUD en PHP con Composer

## Clonar el archivo

**Ejecutar el siguiente comando dentro de `xampp/htdocs`:**

```
git clone <ruta del git>
```

# Descargar e instalar XAMPP

## Encender el servicio de Apache como de MySQL

1. Ir a la configuración de Apache y abrir el archivo php.ini

2. Habilitar (eliminamos el ;) la extensión de:
- `extension=gd`
- `extension=gmp`
- `extension=intl`
- `extension=zip`

**Esto es necesario para poder instalar Composer.**

### Abrir la terminal y ejecutar el siguiente comando para verificar si Composer ya está instalado:


```
composer -v
``` 


## En caso de no tenerlo instalado, agregar los siguientes comandos:

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'.PHP_EOL; } else { echo 'Installer corrupt'.PHP_EOL; unlink('composer-setup.php'); exit(1); }"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

### Otra opción es presionar en la parte superior de la página donde dice:
[Download and run Composer](https://getcomposer.org/Composer-Setup.exe)


Se descargará y lo instalaremos manualmente.

### Restaurar dependencias

Dado que se agregó un archivo `.gitignore` que excluye la carpeta `vendor`, al clonar el repositorio, ejecutar el siguiente código para su restauración:


```
composer install
```



