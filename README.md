🚀 Curso Fullstack de PHP y Laravel

¡Bienvenido al repositorio oficial del Curso de PHP de Iván Cernadas! Este repositorio contiene todo el material práctico, los códigos de las clases, los ejercicios y el proyecto final desarrollado a lo largo de la formación.

El objetivo es llevar al alumno desde cero hasta la implementación de una aplicación web completa y profesional, usando PHP moderno y Laravel.

📖 ¿Qué es PHP y por qué aprenderlo en 2026?

PHP (acrónimo recursivo de PHP: Hypertext Preprocessor) es un lenguaje de programación de propósito general, especialmente diseñado para el desarrollo web del lado del servidor (backend).

Cuando visitas una página web dinámica, es muy probable que PHP esté trabajando detrás de escena: procesando formularios, consultando bases de datos, gestionando sesiones de usuario y generando el HTML que tu navegador muestra.

Dato curioso: PHP fue creado en 1994 por Rasmus Lerdorf. Lo que empezó como un conjunto de scripts personales para su página web, hoy impulsa la mayoría de los sitios web del mundo, incluyendo WordPress, Facebook y Wikipedia.

PHP en 2026: más vivo que nunca

Quizás hayas escuchado que "PHP está muerto". Nada más lejos de la realidad. PHP ha experimentado una transformación radical en los últimos años:

Versión	Año	Novedades destacadas
PHP 7	2015	Mejoras de rendimiento de hasta un 200%
PHP 8.0	2020	JIT compilation, union types, match expressions
PHP 8.1	2021	Enums, fibers, readonly properties
PHP 8.2	2022	Readonly classes y mejoras en tipos
PHP 8.3	2023	Tipado mejorado y nuevas funciones
PHP 8.4 / 8.5	2024-2025	Continúan la evolución del lenguaje

El PHP moderno es un lenguaje tipado, con características de programación funcional y orientada a objetos, respaldado por un ecosistema maduro de herramientas y frameworks.

¿Qué puedes construir con PHP?
🌐 Sitios web dinámicos — Blogs, portfolios, páginas corporativas
🛒 Tiendas online — E-commerce con WooCommerce, Magento, PrestaShop
💼 Aplicaciones web — SaaS, dashboards, sistemas de gestión
🔌 APIs REST — Backends para aplicaciones móviles y SPAs
📝 CMS — WordPress, Drupal, Joomla
⚙️ Herramientas CLI — Scripts de automatización y comandos
¿Por qué aprender PHP en 2026?
Demanda laboral: miles de empresas buscan desarrolladores PHP; WordPress por sí solo impulsa una parte enorme de todos los sitios web, por lo que hay trabajo de sobra.
Curva de aprendizaje amigable: puedes empezar a ver resultados desde el primer día, lo que mantiene la motivación alta.
Ecosistema maduro: frameworks como Laravel y Symfony, junto con herramientas como Composer, hacen que desarrollar sea un placer.
Hosting económico: prácticamente cualquier hosting soporta PHP, lo que abarata y facilita el despliegue.
Comunidad enorme: documentación abundante, tutoriales y una gran cantidad de respuestas disponibles ante cualquier problema.

El camino después de PHP es natural: una vez lo domines, el salto a frameworks como Laravel resulta sencillo, y las habilidades adquiridas (lógica de programación, bases de datos, HTTP, APIs) te servirán para cualquier otro lenguaje que quieras aprender después.

📚 Lo que vas a aprender (Módulos)
Fundamentos modernos de PHP — Sintaxis, programación orientada a objetos (OOP) y Composer.
Introducción a Laravel — Arquitectura MVC, rutas, controladores, solicitudes y vistas (Blade).
Bases de datos y Eloquent ORM — Migraciones, seeders, factories, relaciones y Query Builder.
Frontend integrado — Interfaces adaptativas con Tailwind CSS, Vite y Alpine.js (o Vue.js/React, según el curso).
Autenticación y seguridad — Laravel Breeze/Jetstream, middleware, gates y políticas.
API RESTful — Creación de endpoints, consumo mediante JavaScript y Laravel Sanctum.
Calidad del código — Pruebas automatizadas con Pest o PHPUnit.
Despliegue y DevOps — Preparación para producción, Docker (opcional) y buenas prácticas de CI/CD.
🛠️ Tecnologías utilizadas
Backend: PHP 8.3+, Laravel 11.x
Frontend: Blade, Tailwind CSS, Vite, Alpine.js
Base de datos: MySQL / PostgreSQL
Herramientas: Git, Composer, Node.js, Postman/Insomnia
⚙️ Requisitos previos

Antes de empezar, asegúrate de tener instalado en tu equipo:

 PHP (versión 8.2 o superior)
 Composer
 Node.js (versión 18 o superior) y NPM
 Un servidor de base de datos (MySQL, MariaDB o PostgreSQL)
 Git
💻 Cómo ejecutar el proyecto localmente

Sigue estos pasos para configurar el entorno de desarrollo:

1. Clona el repositorio
bash
git clone https://github.com/Usul000/Curso-PHP-8.git
cd Curso-PHP-8
2. Instala las dependencias de PHP
bash
composer install
3. Configura las variables de entorno
bash
cp .env.example .env
php artisan key:generate

Edita el archivo .env con los datos de conexión a tu base de datos.

4. Crea la base de datos
sql
CREATE DATABASE curso_php CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

Ejemplo de tabla users (referencia, Laravel la genera automáticamente vía migraciones):

sql
CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(220) COLLATE utf8mb4_unicode_ci NOT NULL,
    email VARCHAR(220) COLLATE utf8mb4_unicode_ci NOT NULL,
    PRIMARY KEY (id)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
5. Ejecuta las migraciones
bash
php artisan migrate
6. Instala las dependencias de frontend y compílalas
bash
npm install
npm run dev
7. Levanta el servidor de desarrollo
bash
php artisan serve

Visita http://localhost:8000 para ver la aplicación en marcha.

📂 Estructura del repositorio
Curso-PHP-8/
├── Fundamentos de programación/          # Código y ejercicios desde cero hasta Laravel
├── Proyectos final/  # Proyecto final del curso
├── Recursos/        # Material de apoyo, diagramas, apuntes
└── README.md

(Ajusta esta estructura según cómo esté organizado realmente tu repositorio.)

🤝 Contribuciones

Este repositorio es material de curso, pero si encuentras un error o quieres proponer una mejora, siéntete libre de abrir un issue o un pull request.

📄 Licencia

Este proyecto se distribuye con fines educativos. Consulta el archivo LICENSE (si existe) para más detalles.

Hecho con ❤️ por Usul000 para todas aquellas personas que están aprendiendo PHP y Laravel en 2026.
