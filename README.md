<p align="center">
  <img src="./public/images/lectura.png" alt="Logo" width="200">
</p>

# Books App 📚

Este proyecto es un espacio personal donde comparto mis lecturas actuales, próximas y pasadas. El objetivo es que cualquier persona pueda conocer qué libro estoy leyendo, cuáles planeo leer próximamente y cuáles he leído hasta la fecha.

## Características principales

- **Libro actual:**  
  Muestra información detallada del libro que estoy leyendo en este momento, incluyendo portada, título, autor, género, progreso y sinopsis.

- **Próximas lecturas:**  
  Listado visual de los libros que planeo leer próximamente, presentados en tarjetas con imagen, título, autor y breve descripción.

- **Libros leídos:**  
  Sección donde se muestran todos los libros que he leído hasta ahora, permitiendo a los visitantes explorar mi historial de lecturas.

## Propósito del sitio

El sitio está pensado como una vitrina para que cualquier visitante pueda descubrir mi gusto por la lectura.

## Para el desarrollo

El proyecto busca tener funcionalidades administrativas para gestionar los libros:
- Cargar información de nuevos libros (portada, título, autor, género, sinopsis, etc.).
- Guardar y actualizar los datos en la base de datos.
- Mostrar la información de manera dinámica y visualmente atractiva.

## Tecnologías utilizadas

- [**Laravel 12**](https://laravel.com/)
- [**Tailwind CSS v4**](https://tailwindcss.com/) (estilos y utilidades responsivas)
- [**MySQL**](https://www.mysql.com/) (base de datos)
- [**FilamentPHP**](https://filamentphp.com/) (panel administrativo)

## Instalación y uso

1. Clona el repositorio:
```bash 
git clone <URL_DEL_REPOSITORIO>
cd books-app
```

2. Instala las dependencias:
```bash
composer install
npm install
```

3. Configura el archivo `.env` con tus credenciales de base de datos y otras configuraciones necesarias.

4. Genera la clave de aplicación:
```bash
php artisan key:generate
```

5. Ejecuta las migraciones de ser necesario
```bash
php artisan migrate
```

6. Levanta el servidor de desarrollo:
```bash
php artisan serve
npm run dev
```

7. Accede a la aplicación en tu navegador:  
   `http://localhost:8000`