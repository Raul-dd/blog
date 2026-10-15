Blog Core - Sistema de Gestión de Contenido y PublicacionesSistema web integral desarrollado para la administración, publicación e interacción con contenido editorial y artículos digitales. La plataforma permite la gestión centralizada de artículos, usuarios, paneles de administración y permisos de acceso, optimizada para ofrecer una experiencia fluida tanto para creadores de contenido como para lectores.Arquitectura y Propósito del ProyectoEl proyecto está diseñado como un CMS / Blog interactivo desacoplado en módulos clave:Panel de Administración Centralizado: Interfaz administrativa integrada con AdminLTE para la creación, edición, moderación y eliminación de artículos, categorías y comentarios.Gestión de Usuarios y Roles: Control de acceso que diferencia entre administradores, autores y suscriptores/lectores.Módulo de Autenticación y Perfiles: Sistema completo de registro, inicio de sesión, recuperación de credenciales y personalización de perfiles de usuario.Portal Público: Interfaz responsive para la lectura de publicaciones, búsqueda de entradas, filtrado por categorías/etiquetas y sección de interacción mediante comentarios.Funcionalidades PrincipalesPara Administradores y AutoresGestión de Publicaciones (CRUD): Creación de entradas mediante editor enriquecido, asignación de estados (borrador / publicado), categorización y subida de imágenes destacadas.Moderación de Comentarios: Panel de revisión para comentarios en publicaciones de blog.Administración de Perfiles: Panel dedicado para la actualización de datos de usuario, avatares y preferencias de la cuenta (resources/views/user, resources/views/subscriber).Para Lectores / SuscriptoresNavegación Dinámica: Catálogo de publicaciones ordenadas por fecha, relevancia o categoría.Interacción: Capacidades para comentar artículos y gestionar su propia suscripción/cuenta de usuario.Interfaz Adaptativa: Diseño limpio y adaptado a dispositivos móviles gracias a la integración con Tailwind CSS.Stack TecnológicoMóduloTecnología / LibreríaBackendPHP 8.2+ / Laravel 11.xFrontend UIBlade Templates / Tailwind CSS / ViteDashboard AdminAdminLTEBase de DatosMySQL / PostgreSQL / MariaDBPruebasPest / PHPUnitRequisitos del SistemaPara ejecutar este proyecto de manera local es necesario contar con el siguiente entorno configurado:PHP >= 8.2Composer >= 2.xNode.js >= 18.x & NPMBase de Datos: MySQL / MariaDB / PostgreSQL / SQLiteExtensiones de PHP obligatorias: pdo, mbstring, openssl, tokenizer, xml, ctype, jsonInstrucciones de Instalación y Despliegue Local1. Clonar el repositoriogit clone https://github.com/Raul-dd/blog.git
cd blog
2. Instalar dependencias backend y frontendcomposer install
npm install
3. Configuración de variables de entornoCopia el archivo de ejemplo para crear el entorno local:cp .env.example .env
Configura las credenciales de tu base de datos en el archivo .env:DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_db
DB_USERNAME=root
DB_PASSWORD=tu_contraseña
4. Inicialización del sistemaGenera la clave de encriptación de la aplicación y ejecuta las migraciones de base de datos:php artisan key:generate
php artisan migrate
(Opcional: Si cuentas con seeders para cargar datos de prueba)php artisan migrate --seed
5. Compilación de assets y ejecuciónInicia la compilación del frontend en una terminal:npm run dev
En otra terminal, arranca el servidor de desarrollo local:php artisan serve
Accede a la aplicación en tu navegador desde: http://127.0.0.1:8000Estructura de Vistas Relevantesresources/views/
├── auth/           # Autenticación y recuperación de contraseñas
├── layouts/        # Estructuras base de la interfaz (app, admin)
├── subscriber/     # Vistas y paneles del lector/suscriptor
├── user/           # Gestión del perfil de usuario
└── vendor/adminlte/# Plantillas e interfaces del panel de administración
LicenciaEste proyecto está distribuido bajo la licencia MIT.
