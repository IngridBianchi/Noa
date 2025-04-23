# Proyecto Noa

<p align="center">
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Acerca del Proyecto

Este proyecto está construido utilizando **Laravel** y está orientado a la gestión de productos y servicios. La plataforma está diseñada para ser fácil de usar y escalable, permitiendo a los usuarios gestionar todos sus productos de manera eficiente.

## Requisitos Previos

Para construir y ejecutar este proyecto localmente, necesitas tener **Docker** y **Docker Compose** instalados. A continuación se describen los pasos para su instalación.

### Instalación de Docker

Si no tienes Docker instalado, sigue estos pasos:

1. Actualiza los paquetes de tu sistema:

   ```bash
   sudo apt update
   ```

2. Instala dependencias esenciales:

   ```bash
   sudo apt install apt-transport-https ca-certificates curl software-properties-common
   ```

3. Agrega el repositorio oficial de Docker:

   ```bash
   sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
   ```

4. Actualiza nuevamente los paquetes:

   ```bash
   sudo apt update
   ```

5. Instala Docker:

   ```bash
   sudo apt install docker-ce
   ```

6. Verifica que Docker se haya instalado correctamente:

   ```bash
   sudo docker --version
   sudo systemctl status docker
   ```

### Instalación de Docker Compose

1. Instala Docker Compose:

   ```bash
   sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
   ```

2. Dale permisos de ejecución:

   ```bash
   sudo chmod +x /usr/local/bin/docker-compose
   ```

3. Verifica la instalación de Docker Compose:

   ```bash
   docker-compose --version
   ```

## Instalación del Proyecto

Una vez que Docker y Docker Compose estén configurados correctamente, puedes proceder con la instalación del proyecto.

1. Clona el repositorio desde GitHub:

   ```bash
   git clone https://github.com/power38261010/Noa.git
   cd Noa
   ```

2. Cambia a la rama `master`:

   ```bash
   git checkout master
   ```

3. Renombra el archivo `.env.example` a `.env`:

   ```bash
   mv .env.example .env
   ```

4. Instala las dependencias de Composer:

   ```bash
   docker run --rm \
     -u "$(id -u):$(id -g)" \
     -v $(pwd):/opt \
     -w /opt \
     laravelsail/php80-composer:latest \
     composer install --ignore-platform-reqs
   ```

5. Levanta los contenedores de Docker:

   ```bash
   ./vendor/bin/sail up
   ```

6. En otra pestaña de la terminal, ejecuta las migraciones de la base de datos:

   ```bash
   ./vendor/bin/sail artisan migrate
   ```

7. Luego, ejecuta el Seeder para llenar las tablas de productos y servicios:

   ```bash
   ./vendor/bin/sail artisan db:seed --class=ProductoServicioTableSeeder
   ```

## Acceso a la Aplicación

Una vez que todo esté en funcionamiento, podrás acceder a la aplicación desde tu navegador en la siguiente URL:

```bash
http://0.0.0.0/
```

## Configuración del Proyecto

El archivo `.env` contiene todas las configuraciones clave del proyecto. Aquí puedes modificar las configuraciones de la base de datos, el entorno de la aplicación y otras variables importantes.

### Variables Importantes

- **DB_CONNECTION**: Establece el tipo de base de datos. Para este proyecto, se usa PostgreSQL.
- **DB_HOST**: Dirección del servidor de la base de datos.
- **DB_PORT**: Puerto donde escucha la base de datos.
- **DB_DATABASE**: Nombre de la base de datos.
- **DB_USERNAME**: Usuario de la base de datos.
- **DB_PASSWORD**: Contraseña de la base de datos.

## Desarrollo

Si deseas hacer modificaciones o agregar nuevas funcionalidades al proyecto, asegúrate de seguir las buenas prácticas de desarrollo de Laravel.

Para arrancar el entorno de desarrollo, puedes ejecutar el siguiente comando para iniciar el servidor de desarrollo de Vite:

```bash
npm run dev
```

Esto iniciará el servidor de desarrollo, y podrás ver los cambios reflejados de inmediato en el navegador.

## Contribuciones

Si deseas contribuir al proyecto, asegúrate de hacer un **fork** y enviar un **pull request** con tus cambios. Por favor, asegúrate de que tu código esté bien probado y documentado.

