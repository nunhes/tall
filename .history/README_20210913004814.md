# Crear un sito con Tailwind, Alpine, Laravel & Livewire



## Requirimentos

- **Tailwind**
- **Alpine**
- **Laravel**
- **Larave/breeze**

- **Liveware**

  Livewire é un framework de pila completa para Laravel que facilita a construción de interfaces dinámicas sen deixar a comodidade de Laravel.

## O proxecto e as súas dependencias

Crear un novo proxecto con Laravel, indicando o cartafol onde se vai a crear:

``$ composer create-project laravel/laravel nomedoproxecto``

E teremos creado o esqueleto do proxecto.

Abreo co teu editor de código favorito

### `.env`

Abre e edita o arquivo `.env` modificando todo aquilo que sexa importante para o proxecto:

- ``APP_NAME=nomedoproxecto``

- ``APP_URL=http://localhost:8000`` /* busca un porto comodo para o desenvolvemento local */

- Para simplificar o proceso e non ter que configurar un servidor da bbdd, imos a empregar SQLite, polo tanto o bloque de conexión a base de datos quedaría así:

  ```json
  DB_CONNECTION=sqlite
  # DB_HOST=127.0.0.1
  # DB_PORT=3306
  # DB_DATABASE=laravel
  # DB_USERNAME=root
  # DB_PASSWORD=
  ```

  Para completar a configuración teremos que crear, no cartafol ``database``, o arquivo ``database.sqlite``.

  Por suposto que se pode usar outra configuración para a base de datos. Configura este bloque segundo as túas preferencias.

Iremos vendo outros partes de `.env` máis adiante.

Imos probar a nosa entorna:

``$ php artisan serve``

E aí está:

http://127.0.0.1:8000/

![Primeiro paso da instalación de Laravel](http://ambosass.com/docs/assets/tall_001.png)

### Engadir dependencias

Para completar o esqueleto da nosa aplicación imos instalar as dependencias precisas:

- **Livewire** *(framework de construción de interfaces dinámicas)*: 

  ``$ composer require livewire/livewire``

- **Laravel Breeze** *(para crear un sistema de usuarios)*: 

  ``$ composer require laravel/breeze``
