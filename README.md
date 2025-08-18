# EDZero

**EDZero** is a starter project built with Laravel, Livewire, and Filament, featuring multi-panel support (Admin & Client) and role-based permissions using Spatie’s Permission package. The project is fully dockerized with a comprehensive service stack for local development and production deployment.

---

## Features

- Basic Authentication: Login, Registration, Password Reset, Email Verification, Email Change Verification & Profile
- Multi-panel architecture: Admin and Client panels  
- Role and Permission management with Spatie Laravel Permission  
- Built with Laravel + Livewire + Filament  
- HTTPS enabled with Nginx  
- Dockerized with full stack including:  
  - PostgreSQL (pgsql) & pgAdmin  
  - Redis & RedisInsight  
  - Meilisearch  
  - Mailpit (mail catcher)  
  - MinIO (object storage)  
  - RabbitMQ (message broker)  
  - Selenium (for browser testing)  
  - Soketi (WebSocket server)  

---

## Environment & Hosting

- **Local development:** Hosted at `https://edzero.test`  
- **Production:** Hosted at `https://edzero.co.id`  

---

## Getting Started

### Prerequisites

- Docker & Docker Compose installed  
- `edzero.test` added to your local hosts file for local HTTPS  

### Running the Project

1. Start Docker containers:

   ```bash
   dockhelp compose up -d --local
   ````

2. Create the database (default from `.env`):

   ```bash
   dockhelp make:db
   ```

3. Run migrations and seed the database:

   ```bash
   dockhelp artisan migrate --seed
   ```

---

## User Access

The project comes pre-seeded with roles for both admin and client users. Use the following roles for access control:

* **Admin Roles:** super\_admin, admin, manager, developer
* **Client Roles:** client, guest

You can create or manage users with these roles as needed.

---

## dockhelp - Docker Helper Script

A helper script `dockhelp` simplifies Docker and artisan commands, for example:

* Open shell inside app container:

  ```bash
  dockhelp shell
  ```

* Run artisan commands:

  ```bash
  dockhelp artisan migrate
  ```

* Manage Docker compose (local or production):

  ```bash
  dockhelp compose up -d --local
  dockhelp compose down
  ```

See the script for full usage details.

---

## GitKraken Cloud Patch for Local Docker Config

Apply this patch to sync your local Docker config:

[GitKraken Cloud Patch](https://gitkraken.dev/link/drafts/de340c32-7727-48d4-80ec-2e5b91fcae7b?type=patch)

---

## License

MIT License

---

*Built with ❤️ by EDZero Team*