# AIIMS Deoghar Website (Laravel 12 + Livewire + Vite)

[![Laravel](https://img.shields.io/badge/Laravel-12.x-f9322c?logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-%5E8.2-777bb4?logo=php&logoColor=white)](https://www.php.net/)
[![Livewire](https://img.shields.io/badge/Livewire-Flux%20%26%20Volt-ef3b2d)](https://livewire.laravel.com/)
[![TailwindCSS](https://img.shields.io/badge/TailwindCSS-4.x-38bdf8?logo=tailwindcss&logoColor=white)](https://tailwindcss.com)
[![Vite](https://img.shields.io/badge/Vite-7.x-646cff?logo=vite&logoColor=white)](https://vitejs.dev)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

A modern, content-driven web application for AIIMS Deoghar built with Laravel 12, Livewire (Volt + Flux), Tailwind CSS, and Vite. It includes a public-facing site (notices, jobs, events, departments, courses, procurements, gallery) and a secured admin dashboard for content management.

---

## Table of Contents
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Project Structure](#-project-structure-high-level)
- [Quick Start](#-quick-start-local-development)
- [Authentication and Admin](#-authentication-and-admin)
- [Key Routes](#-key-routes-selected)
- [Testing](#-testing)
- [Frontend](#-frontend)
- [Useful Artisan Commands](#-useful-artisan-commands)
- [Configuration Notes](#-configuration-notes)
- [Contributing](#-contributing)
- [License](#-license)
- [Acknowledgements](#-acknowledgements)

---

## ✨ Features
- Public pages: Home, About, Hospital Services, Academics, Departments, Student Corner, Contact
- Dynamic content modules:
  - Notices, Jobs, Events
  - Departments and Courses
  - Procurements
  - Gallery
- Search page stub
- Auth with user profiles and admin role/guarded admin area
- Admin dashboard with CRUD for key content types
- Livewire components, Tailwind CSS styling, and Vite bundling

---

## 🧱 Tech Stack
- PHP ^8.2, Laravel ^12 (`laravel/framework`)
- Livewire Flux ^2, Livewire Volt ^1
- Tailwind CSS ^4, Vite ^7
- Pest for testing

---

## 📦 Project Structure (high level)
```
app/
  Http/Controllers/...           # Public + Admin controllers
  Livewire/...                   # Livewire components (Auth, Settings, AboutUs)
  Models/...                     # Eloquent models (Notice, JobPosting, Event, ...)
bootstrap/
config/
database/
  migrations/                    # Tables for notices, jobs, events, courses, ...
  seeders/                       # Admin seeder and data seeders
public/
resources/
  css/, js/                      # Frontend assets
  views/                         # Blade templates (public + admin)
routes/
  web.php                        # Public + Admin routes
vite.config.js                   # Vite + Tailwind integration
composer.json, package.json
```

---

## 🚀 Quick Start (Local Development)

### 1) Requirements
- **PHP** 8.2+
- **Composer**
- **Node.js** 18+ and **npm**
- A **database** (MySQL/MariaDB/PostgreSQL/SQLite)

### 2) Clone and install
```bash
# From your dev folder
git clone <your-repo-url> aiims-deoghar
cd aiims-deoghar

# PHP deps
composer install

# Node deps
npm install
```

### 3) Environment
```bash
# Copy example env if not present
cp .env.example .env

# Generate APP_KEY
php artisan key:generate
```
Update `.env` with your database credentials and mail settings.

### 4) Database and storage
```bash
# Run migrations
php artisan migrate

# Seed admin user (idempotent)
php artisan db:seed --class=AdminUserSeeder

# Link storage for public access
php artisan storage:link
```

Default admin user (change after first login):
- Email: `admin@aiimsdeoghar.edu.in`
- Password: `ChangeMe123!`

### 5) Run the app
Option A: run backend, queue and Vite together (Windows-friendly):
```bash
composer run dev
```
This uses `concurrently` to run:
- `php artisan serve`
- `php artisan queue:listen --tries=1`
- `npm run dev`

Option B: run separately:
```bash
php artisan serve
php artisan queue:listen --tries=1
npm run dev
```

Build assets for production:
```bash
npm run build
```

---

## 🔐 Authentication and Admin
- Public routes live under `routes/web.php` (home, notices, jobs, events, departments, courses, procurements, contact, search)
- Admin auth routes under the `admin` prefix:
  - `GET /admin/login` for the dedicated admin login
  - Admin area guarded by `auth` and `admin` middleware
- Change the default admin password after first login

---

## 🧭 Key Routes (selected)
```text
GET /                           Home
GET /about                      About index
GET /hospital                   Hospital services index
GET /academics                  Academics index
GET /departments                Departments listing
GET /notices                    Notices listing
GET /jobs                       Jobs listing
GET /events                     Events listing
GET /procurement                Procurements listing
GET /contact                    Contact form
GET /search                     Search page

# Admin
GET  /admin/login               Admin login
GET  /admin                     Admin dashboard (auth + admin)
# Admin resources: notices, events, jobs, gallery, departments, courses, procurements
```

---

## 🧪 Testing
```bash
php artisan test
```
Pest is configured for feature and unit tests under `tests/`.

---

## 🎨 Frontend
- Tailwind CSS 4 + Vite 7
- Entry points: `resources/css/app.css`, `resources/js/app.js`
- Vite config at `vite.config.js` with Tailwind integration

Dev server:
```bash
npm run dev
```

Production build:
```bash
npm run build
```

---

## 🛠 Useful Artisan Commands
```bash
php artisan migrate               # Run migrations
php artisan migrate:fresh --seed  # Recreate DB with seeders
php artisan storage:link          # Symlink storage/app/public -> public/storage
php artisan queue:listen --tries=1
```

---

## 🔧 Configuration Notes
- Ensure `.env` `APP_URL` matches your local domain (e.g., http://127.0.0.1:8000)
- Set `FILESYSTEM_DISK=public` for uploads that should be web-accessible
- Configure mail in `.env` for contact form notifications

---

## 🧑‍💻 Contributing
1. Create a feature branch
2. Make changes with tests
3. Ensure coding standards (run `pint` if installed) and tests pass
4. Open a pull request

---

## 📜 License
MIT

---

## 🙏 Acknowledgements
- Laravel, Livewire, Tailwind CSS communities
