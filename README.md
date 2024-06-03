
<span>

Implementación de autenticación con Laravel y Breeze, contiene mejoras en la parte del login para no utilizar la plantilla por default de breeze, la intensión es proporcionar la base para proyectos que requieran de un login.

</span>

## Features
Este proyecto facilita:

* Laravel Breeze: Utiliza el poder de Laravel Breeze para un sistema de autenticación robusto.
* Estilo personalizado: Las vistas de autenticación se han mejorado con un diseño visualmente atractivo y moderno.
* Amigable para el usuario: Proporciona una experiencia de autenticación fluida y amigable para el usuario.
* Fácil de instalar: Sigue los sencillos pasos de instalación a continuación para comenzar.

## Getting started
Para instalar el proyecto sigue los siguientes pasos:

Coonar el repositorio
```bash
git clone https://github.com/esorianon/login_base.git
```

Ingresa al directorio del proyecto
```bash
cd login_base
```

Instalar las dependencias
```bash
composer install
```

Copia el ejemplo del archivo .env.excample
```bash
cp .env.example .env
```

Genera la llave de la aplicación
```bash
php artisan key:generate
```

## Configuration
Actualia en el archivo .env la conexión a tu base de datos

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DATABASE_NAME
DB_USERNAME=YOUR_USERNAME
DB_PASSWORD=YOUR_PASSWORD
```

## Using
Ejecuta las migraciones y seeds

```bash
php artisan migrate --seed
```

Ejecuta el Servidor de laravel para levantar la aplicación(No aplica si se tiene XAMMP/Laragoon/etc..)
```bash
php artisan serve
```

Una vez iniciado ingresado el comando anterior ingresa a `http://localhost:8000` para acceder al sistema.