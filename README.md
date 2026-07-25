🚀🚀 Curso Fullstack de PHP y Laravel 🚀🚀
¡Bienvenido al repositorio oficial de Iván Cernadas de PHP! Este repositorio contiene todo el material práctico, los códigos de las clases, los ejercicios y el proyecto final desarrollado a lo largo de la formación. 
El objetivo es llevar al alumno desde cero hasta la implementación de una aplicación web completa y profesional.

📚 Lo que vas a aprender (Módulos)

Fundamentos modernos de PHP: Sintaxis, programación orientada a objetos (OOP) y Composer.
Introducción a Laravel: Arquitectura MVC, rutas, controladores, solicitudes y vistas (Blade).
Bases de datos y Eloquent ORM: Migraciones, seeders, factories, relaciones y Query Builder.
Frontend integrado: Creación de interfaces adaptativas con Tailwind CSS, Vite y Alpine.js (o Vue.js/React, según el curso).
Autenticación y seguridad: Laravel Breeze/Jetstream, middleware, gates y políticas.
API RESTful: Creación de endpoints, consumo mediante JavaScript y Laravel Sanctum.
Calidad del código: Pruebas automatizadas con Pest o PHPUnit.
Despliegue y DevOps: Preparación para producción, Docker (opcional) y buenas prácticas de CI/CD.

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
Sigue los pasos que se indican a continuación para configurar el entorno de desarrollo:
Clona el repositorio:
Comando SQL para crear la tabla USERSCreate Database  CHARACTER SET utf8mb4 COLATE utf8mb4_unicode_ci;
git clone [https://github.com/GVScode/FullstackPHP.git](https://github.com/Usul000/Curso-PHP-)

CREATE TABLE IF NO EXISTS users ( id int NOT NULL AUTO_INCREMENT, name varchar (220) COLLATE utf8mb4_unicode_ci NOT NULL, 
email varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL, PRIMARY KEY (id) )ENGINE=INNODB DEFAULT CHARACTER=utf8mb4 COLLATE utf8mb4_unicode_ci;
