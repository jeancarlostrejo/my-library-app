<p align="center">
  <img src="./public/images/lectura.png" alt="Logo" width="200">
</p>

# Books App 📚

Este proyecto es un espacio personal donde comparto mis lecturas actuales, próximas y pasadas. El objetivo es que cualquier persona pueda conocer qué libro estoy leyendo, cuáles planeo leer próximamente y cuáles he leído hasta la fecha.

## Características principales

-   **Libro actual:** Muestra información detallada del libro que estoy leyendo en este momento, incluyendo portada, título, autor, género, progreso, la sinopsis e información acerca del autor del libro

-   **Próximas lecturas:** Listado de los libros con su información; libros que leeré próximamente

-   **Libros leídos:** Sección donde se muestran todos los libros que he leído hasta ahora, permitiendo a los visitantes explorar mi historial de lecturas.
-   **Panel administrativo:** Un panel de administración para gestionar los libros, autores, etiquetas, permitiendo agregar, editar y eliminar, etc.

-   **Reseña de IA (próximamente)**: generación de una reseña de los libros utilizando inteligencia artificial, para ofrecer una visión más profunda de cada obra para los visitantes.

## Propósito del sitio

El sitio está pensado como una vitrina para que cualquier visitante pueda descubrir y mi gusto por la lectura.

## Para el desarrollo

El proyecto busca tener funcionalidades administrativas para gestionar los libros y autores:

-   Cargar información de nuevos libros (portada, título, autor, género, sinopsis, etc.).
-   Guardar y actualizar los datos en la base de datos.
-   Mostrar la información de manera dinámica y visualmente atractiva.
-   Permitir la edición y eliminación de libros y autores desde el panel administrativo.
-   Implementar una funcionalidad de reseñas generadas por IA para enriquecer la experiencia del usuario.

## Tecnologías a utilizar

-   [**Laravel 12**](https://laravel.com/)
-   [**Tailwind CSS v4**](https://tailwindcss.com/) (estilos y utilidades responsivas)
-   [**MySQL**](https://www.mysql.com/) (base de datos)
-   [**FilamentPHP**](https://filamentphp.com/) (panel administrativo)
-   [**PrismPHP**](https://prismphp.com/): paquete para integracion de LLM (Large Language Models) como OpenAI, Anthropic, Gemini, DeepSeek, etc. Para generar las reseñas de los libros.

## Instalación y uso

1. **Clona el repositorio:**

```bash
git clone <URL_DEL_REPOSITORIO>
cd books-app
```

2. **Instala las dependencias:**

```bash
composer install
npm install
```

3. **Configura el archivo `.env`**: haz una copia del archivo `.env.example` y renombrala a `.env` y cambia los valores de las variables de entorno (credenciales de base de datos, `FILESYSTEM_DISK=public`, etc).

4. **Genera la clave de aplicación:**

```bash
php artisan key:generate
```

5. **Ejecuta las migraciones**

```bash
php artisan migrate
```

6. **Crea un usuario administrador para acceder al panel de administración:**

```bash
php artisan make:filament-user
```

7.  **Crea el link simbólico para acceder a los archivos públicos:**

```bash
php artisan storage:link
```

8. **Levanta el servidor de desarrollo:**

```bash
php artisan serve
npm run dev
```

**9. Accede a la aplicación en tu navegador:**

`http://localhost:8000`

10. Accede al panel de administración en:

`http://localhost:8000/admin`
