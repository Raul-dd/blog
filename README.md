# 📰 Blog Core — Content Management System

<p align="center">
  <strong>Plataforma web de gestión de contenido, publicación de artículos e interacción con lectores.</strong>
</p>

<p align="center">
  Aplicación desarrollada con Laravel que integra administración de publicaciones, gestión de usuarios y roles, moderación de comentarios y un portal público adaptable a distintos dispositivos.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2+">
  <img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 11">
  <img src="https://img.shields.io/badge/Tailwind_CSS-UI-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
</p>

<p align="center">
  <a href="#-características">Características</a> •
  <a href="#-tecnologías">Tecnologías</a> •
  <a href="#-instalación">Instalación</a> •
  <a href="#-estructura-del-proyecto">Estructura</a> •
  <a href="#-licencia">Licencia</a>
</p>

---

## 📌 Descripción general

**Blog Core** es un sistema de gestión de contenido (CMS) diseñado para administrar publicaciones digitales desde una plataforma centralizada. Su arquitectura organiza las funcionalidades de administración, autenticación, publicación e interacción con los lectores en módulos diferenciados.

El sistema permite gestionar el ciclo de vida de los artículos, organizar el contenido por categorías, administrar cuentas de usuario y moderar comentarios, proporcionando una base para la publicación de contenido editorial en línea.

### 🎯 Objetivos del proyecto

- Centralizar la creación, edición y publicación de artículos.
- Organizar el contenido mediante categorías y herramientas de navegación.
- Implementar mecanismos de autenticación y control de acceso.
- Facilitar la administración de usuarios, perfiles y comentarios.
- Proporcionar una interfaz adaptable para administradores, autores y lectores.

## 🖥️ Vista previa del sistema

> Agrega tus capturas de pantalla en la carpeta `docs/screenshots/` del repositorio y actualiza las rutas de las imágenes de ejemplo.

<table>
  <tr>
    <td align="center" width="50%">
      <strong>🌐 Portal público</strong>
    </td>
    <td align="center" width="50%">
      <strong>🛠️ Panel de administración</strong>
    </td>
  </tr>
  <tr>
    <td width="50%">
      <img src="docs/screenshots/portal-publico.png" alt="Vista del portal público de Blog Core" width="100%">
    </td>
    <td width="50%">
      <img src="docs/screenshots/panel-administracion.png" alt="Vista del panel de administración de Blog Core" width="100%">
    </td>
  </tr>
  <tr>
    <td align="center">Consulta de artículos y navegación por el contenido.</td>
    <td align="center">Administración de publicaciones y recursos del sistema.</td>
  </tr>
</table>

## ✨ Características

### 📝 Gestión de publicaciones

- Creación, consulta, edición y eliminación de artículos (CRUD).
- Asignación de estados de publicación, como borrador y publicado.
- Organización de artículos mediante categorías.
- Incorporación de imágenes destacadas.
- Presentación de publicaciones en el portal público.

### 🔐 Autenticación y usuarios

- Registro e inicio de sesión.
- Recuperación de credenciales.
- Administración de perfiles de usuario.
- Actualización de información personal y avatares.
- Organización de permisos según los roles implementados en la aplicación.

### 💬 Comentarios y moderación

- Interacción de los lectores mediante comentarios.
- Revisión y moderación de comentarios desde el área administrativa.
- Integración de los comentarios con las publicaciones correspondientes.

### 🧭 Portal público

- Consulta de artículos publicados.
- Navegación por categorías.
- Búsqueda y exploración del contenido.
- Diseño adaptable a diferentes tamaños de pantalla.
- Experiencia de lectura orientada a la accesibilidad y facilidad de uso.

### ⚙️ Panel administrativo

- Interfaz administrativa basada en AdminLTE.
- Administración centralizada del contenido.
- Gestión de categorías, publicaciones y comentarios.
- Acceso a las herramientas de gestión de acuerdo con los permisos configurados.

## 👥 Módulos del sistema

| Módulo | Descripción |
|---|---|
| Administración | Gestión centralizada de los recursos del sistema. |
| Publicaciones | Creación, edición, categorización y publicación de artículos. |
| Usuarios y roles | Administración de cuentas y permisos de acceso. |
| Autenticación | Registro, inicio de sesión y recuperación de credenciales. |
| Comentarios | Revisión y moderación de las interacciones de los lectores. |
| Perfiles | Actualización de información y preferencias de usuario. |
| Portal público | Consulta y navegación por los artículos disponibles. |

## 🧰 Tecnologías

| Tecnología | Uso |
|---|---|
| **PHP 8.2+** | Lenguaje de programación del backend. |
| **Laravel 11.x** | Framework principal de la aplicación. |
| **Blade Templates** | Motor de plantillas para las vistas. |
| **Tailwind CSS** | Estilos y diseño de interfaces. |
| **AdminLTE** | Base visual del panel administrativo. |
| **Vite** | Compilación y gestión de recursos frontend. |
| **MySQL / MariaDB / PostgreSQL / SQLite** | Motores de base de datos compatibles según la configuración. |
| **Composer** | Gestión de dependencias PHP. |
| **NPM** | Gestión de dependencias frontend. |
| **Pest / PHPUnit** | Herramientas de pruebas, si están configuradas en el proyecto. |

## 📋 Requisitos previos

Antes de instalar la aplicación, verifica que tu entorno de desarrollo incluya:

- **PHP:** versión 8.2 o superior.
- **Composer:** versión 2.x o compatible.
- **Node.js:** versión 18 o superior.
- **NPM:** instalado con Node.js.
- **Base de datos:** un motor compatible con la configuración de Laravel.
- **Extensiones PHP:** `ctype`, `fileinfo`, `json`, `mbstring`, `openssl`, `pdo`, `tokenizer`, `xml` y las adicionales requeridas por los paquetes instalados.

> **Nota:** Los requisitos definitivos dependen de las dependencias declaradas en `composer.json` y `package.json`, así como de la configuración de la aplicación.

## 🚀 Instalación

Sigue estos pasos para ejecutar Blog Core en un entorno local.

### 1. Clonar el repositorio

```bash
git clone https://github.com/Raul-dd/blog.git
cd blog
```

### 2. Instalar dependencias

Instala las dependencias del backend y frontend:

```bash
composer install
npm install
```

### 3. Configurar las variables de entorno

Crea el archivo de configuración local a partir del archivo de ejemplo.

**Linux / macOS / Git Bash:**

```bash
cp .env.example .env
```

**Windows CMD:**

```cmd
copy .env.example .env
```

Edita `.env` y configura los parámetros de conexión de tu base de datos. Por ejemplo, para MySQL:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_db
DB_USERNAME=root
DB_PASSWORD=tu_contraseña
```

Asegúrate de que la base de datos exista antes de ejecutar las migraciones.

### 4. Generar la clave de aplicación

```bash
php artisan key:generate
```

### 5. Ejecutar las migraciones

```bash
php artisan migrate
```

Si el proyecto dispone de seeders y necesitas cargar datos iniciales o de prueba:

```bash
php artisan db:seed
```

También puedes ejecutar las migraciones y los seeders en un solo paso:

```bash
php artisan migrate --seed
```

> Ejecuta los seeders únicamente si están disponibles y has revisado los datos que insertan.

### 6. Compilar los recursos frontend

Para el desarrollo, inicia Vite:

```bash
npm run dev
```

Para generar los recursos optimizados para producción:

```bash
npm run build
```

### 7. Iniciar el servidor local

En otra terminal, ejecuta:

```bash
php artisan serve
```

Abre la aplicación en tu navegador:

**http://127.0.0.1:8000**

¡Listo! La aplicación estará disponible localmente si la configuración y las dependencias se encuentran correctamente instaladas.

## 📂 Estructura del proyecto

La siguiente estructura muestra los directorios principales de una aplicación Laravel y algunas de las vistas relevantes de Blog Core.

```text
blog/
├── app/                    # Lógica principal de la aplicación
├── bootstrap/               # Inicialización del framework
├── config/                  # Configuración del sistema
├── database/                # Migraciones, factories y seeders
├── lang/                    # Recursos de idioma
├── public/                  # Punto de entrada y recursos públicos
├── resources/
│   └── views/
│       ├── auth/            # Vistas de autenticación
│       ├── layouts/         # Plantillas base
│       ├── subscriber/      # Vistas del lector o suscriptor
│       ├── user/            # Vistas de gestión de perfiles
│       └── vendor/
│           └── adminlte/    # Vistas relacionadas con AdminLTE
├── routes/                  # Definición de rutas
├── storage/                 # Archivos generados y registros
├── tests/                   # Pruebas automatizadas
├── .env.example             # Plantilla de variables de entorno
├── artisan                  # CLI de Laravel
├── composer.json            # Dependencias PHP
├── package.json             # Dependencias frontend
└── README.md                # Documentación del proyecto
```

> La estructura es ilustrativa. Los directorios y archivos concretos pueden variar según la versión actual del repositorio.

## 🧪 Pruebas

Si el entorno de pruebas está configurado, puedes ejecutar la suite disponible con:

```bash
php artisan test
```

O directamente con PHPUnit:

```bash
./vendor/bin/phpunit
```

En Windows, también puedes ejecutar el binario de PHPUnit desde `vendor\bin\phpunit`.

Si utilizas Pest, consulta la configuración de pruebas del proyecto para conocer los comandos específicos.

## 🔒 Buenas prácticas de configuración

- No publiques el archivo `.env` ni credenciales de acceso.
- Mantén las dependencias actualizadas y revisa su compatibilidad.
- Utiliza permisos adecuados para los directorios de almacenamiento.
- Configura el entorno de producción con `APP_DEBUG=false`.
- Revisa las políticas de autorización y validación antes del despliegue.
- Realiza copias de seguridad de la base de datos antes de efectuar cambios importantes.

## 🗺️ Posibles mejoras futuras

Las siguientes ideas pueden utilizarse como hoja de ruta para futuras versiones:

- [ ] Implementar búsqueda avanzada de publicaciones.
- [ ] Añadir paginación y filtros combinados.
- [ ] Ampliar las opciones de moderación de comentarios.
- [ ] Incorporar pruebas automatizadas para los módulos principales.
- [ ] Mejorar la optimización de imágenes y recursos.
- [ ] Preparar un flujo de despliegue automatizado.
- [ ] Ampliar la documentación técnica y funcional.

> Esta lista representa posibles mejoras, no funcionalidades que necesariamente estén implementadas en la versión actual.

## 🤝 Contribuciones

Las sugerencias, reportes de errores y propuestas de mejora son bienvenidos.

1. Crea un *fork* del repositorio.
2. Crea una rama para tu cambio.
3. Realiza las modificaciones y verifica su funcionamiento.
4. Envía un *pull request* con una descripción clara de los cambios.

## 📄 Licencia

Este proyecto se distribuye bajo la **licencia MIT**, siempre que el archivo de licencia correspondiente esté incluido y sea aplicable al repositorio. Consulta el archivo `LICENSE` para conocer los términos de uso y distribución.

---

<p align="center">
  <strong>Blog Core</strong>
  <br>
  <sub>Gestión de contenido · Publicación digital · Desarrollo web</sub>
  <br><br>
  Desarrollado por <a href="https://github.com/Raul-dd">Raul-dd</a>
</p>
