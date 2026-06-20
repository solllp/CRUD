# CRUD Laravel con Docker Sail

Proyecto CRUD hecho con Laravel y Docker usando Laravel Sail.

## Requisitos

- Docker Desktop abierto y corriendo
- Git
- PHP y Composer instalados en la computadora

## Instalar en otra computadora

Clona el repositorio:

```bash
git clone https://github.com/solllp/CRUD.git
cd CRUD
```

Instala las dependencias de Laravel:

```bash
composer install
```

Crea el archivo de entorno:

```bash
cp .env.example .env
```

Genera la clave de Laravel:

```bash
php artisan key:generate
```

Levanta los contenedores con Docker/Sail:

```bash
./vendor/bin/sail up -d --build
```

Crea las tablas y carga datos iniciales:

```bash
./vendor/bin/sail artisan migrate --seed
```

Abre la pagina principal:

```text
http://localhost:8000
```

## Comandos utiles

Ver contenedores:

```bash
./vendor/bin/sail ps
```

Apagar contenedores:

```bash
./vendor/bin/sail down
```

Ejecutar comandos de Laravel:

```bash
./vendor/bin/sail artisan route:list
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed
```

## Nota
git clone https://github.com/solllp/CRUD.git
cd CRUD
composer install
cp .env.example .env
php artisan key:generate
./vendor/bin/sail up -d --build
./vendor/bin/sail artisan migrate --seed

./vendor/bin/sail exec mysql mysqldump -uroot -p laravel > respaldo.sql
No se suben al repositorio los archivos `.env` ni la carpeta `vendor/`.
Cada computadora debe crear su propio `.env` desde `.env.example` e instalar dependencias con `composer install`.


