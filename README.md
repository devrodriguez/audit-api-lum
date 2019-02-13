# audit-api

-- Para crear proyecto
composer create-project --prefer-dist laravel/laravel Ideas

-- Para instalar las dependencias de laravel
composer install

-- Para levantar un servidor
php artisan serve

-- Generar key del archivo .env
php artisan key:generate

-- Generar datos a traves de model factory
factory(Auditoria\Enterprise::class, 100)->create()

-- Crear la interfaz de autenticacion
php artisan make:auth

-- Crear controlador (--resource Crea los metodos del controlador), (--model crea el modelo para dicho controlador)
php artisan make:controller PhotoController --resource --model=Photo


-- Crear modelo. Con -m crea la migracion.
* El nombre del modelo debe ser singular y en ingles
php artisan make:model ModelName -m

-- Crear una migracion
php artisan make:migration nombre_migracion --create=nombre_tabla

-- Ejecutar una migracion
php artisan migrate

-- Ejecutar migracion. Crea las tablas nuevamente y ejecuta seeder
php artisan migrate:refresh --seed

-- Crear seeder. (Un seeder es para poblar una tabla desde laravel [factory()])
php artisan make:seeder nombre_seeder

# CREAR DATOS EN CONSOLA
-- Ingresar a tinker
        php artisan tinker
-- Crea por pantalla 10 registros sin guardarlos en la BD
        factory(Auditoria\Enterprise::class, 10)->make()
-- Para crearlos en la BD
        factory(Auditoria\Enterprise::class, 10)->create()

# ELIMINAR MIGRACION
1. Eliminar archivos de database/migrations/
2. Ejecutar composer dump-autoload



BOOTSTRAP
Clases para titulo de pagina cool (En una etiqueta h1, h2, ...)
.text-header
.text-center

# FORMS
- Validar Formularios
$data = request()->validate([
        'name' => 'required'
], [
        'name' => 'El campo nombre es obligatorio'
]);

- Mantener un valor anterior
Si no hay un valor por defecto tomara el valor de ($user->email)
<input name="email" value="{{ old('email', $user->email) }}">

- Validar un formulario en el request
$data = request()->validate([
    'name' => 'required',
    'email' => '',
    'password' => '',
]);

# LUMEN
- Start server
php -S localhost:8000 -t public

- Add Lumen Generator
composer require flipbox/lumen-generator
