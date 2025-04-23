# Noa Project

<p align="center">
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About the Project

This project is built using **Laravel** and is focused on managing products and services. The platform is designed to be user-friendly and scalable, allowing users to efficiently manage all their products.

## Prerequisites

To build and run this project locally, you need **Docker** and **Docker Compose** installed. Below are the steps for installation.

### Docker Installation

If you don't have Docker installed, follow these steps:

1. Update your system's packages:

   ```bash
   sudo apt update
   ```

2. Install essential dependencies:

   ```bash
   sudo apt install apt-transport-https ca-certificates curl software-properties-common
   ```

3. Add the official Docker repository:

   ```bash
   sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
   ```

4. Update the packages again:

   ```bash
   sudo apt update
   ```

5. Install Docker:

   ```bash
   sudo apt install docker-ce
   ```

6. Verify Docker installation:

   ```bash
   sudo docker --version
   sudo systemctl status docker
   ```

### Docker Compose Installation

1. Install Docker Compose:

   ```bash
   sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
   ```

2. Grant execution permissions:

   ```bash
   sudo chmod +x /usr/local/bin/docker-compose
   ```

3. Verify Docker Compose installation:

   ```bash
   docker-compose --version
   ```

## Project Installation

Once Docker and Docker Compose are correctly configured, you can proceed with installing the project.

1. Clone the repository from GitHub:

   ```bash
   git clone https://github.com/IngridBianchi/Noa
   cd Noa
   ```

2. Checkout the `master` branch:

   ```bash
   git checkout master
   ```

3. Rename the `.env.example` file to `.env`:

   ```bash
   mv .env.example .env
   ```

4. Install Composer dependencies:

   ```bash
   docker run --rm \
     -u "$(id -u):$(id -g)" \
     -v $(pwd):/opt \
     -w /opt \
     laravelsail/php80-composer:latest \
     composer install --ignore-platform-reqs
   ```

5. Start the Docker containers:

   ```bash
   ./vendor/bin/sail up
   ```

6. In another terminal window, run the database migrations:

   ```bash
   ./vendor/bin/sail artisan migrate
   ```

7. Then, run the Seeder to populate the product and service tables:

   ```bash
   ./vendor/bin/sail artisan db:seed --class=ProductoServicioTableSeeder
   ```

## Accessing the Application

Once everything is up and running, you can access the application in your browser at the following URL:

```bash
http://0.0.0.0/
```

## Project Configuration

The `.env` file contains all the key configuration for the project. You can modify the database configurations, application environment, and other important variables here.

### Important Variables

- **DB_CONNECTION**: Specifies the type of database. For this project, PostgreSQL is used.
- **DB_HOST**: The database server's address.
- **DB_PORT**: The port the database listens on.
- **DB_DATABASE**: The name of the database.
- **DB_USERNAME**: The database user.
- **DB_PASSWORD**: The database password.

## Development

If you want to modify or add new features to the project, make sure to follow Laravel's best development practices.

To start the development environment, you can run the following command to start the Vite development server:

```bash
npm run dev
```

This will start the development server, and you will see the changes reflected immediately in the browser.

## Contributing

If you'd like to contribute to the project, please **fork** the repository and submit a **pull request** with your changes. Be sure to write clear, documented code and ensure that your changes are properly tested.

