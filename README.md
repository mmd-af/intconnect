# Intconnect — Laravel Event & Marketing App ✅

A production-ready Laravel (v12) application showcasing full-stack backend and DevOps skills: automated infrastructure provisioning with Terraform, CI/CD using GitHub Actions, containerized deployments with Docker Compose, and a clean Laravel codebase using Livewire and Filament for admin. This repository was implemented as a personal project to demonstrate backend engineering, automation, and operational skills suitable for inclusion on a CV.

---

## Key Features ✨

- Public site with event listings and event detail pages (SEO optimized)
- Interactive components built with Livewire: contact form, subscription form, event listing and slider
- Admin panel and CRUD with Filament (Events, Sliders, Contacts, Subscriptions)
- Media management via Spatie Media Library
- Soft deletes, model events (slug generation), and server-side validation
- Fully automated deployment: Terraform (Hetzner + Cloudflare) + GitHub Actions
- Containerized builds with multi-stage Dockerfiles and Vite frontend build
- Production readiness: automated migrations, storage linking, and database backup on deploy

---

## Tech Stack & Tools 🔧

- Language & Framework: **PHP 8.2+, Laravel 12**
- Frontend: **Vite**, **Bootstrap**, **Axios**, **jQuery** (light usage)
- Interactivity: **Livewire**
- Admin / CRUD: **Filament**
- Media uploads: **spatie/laravel-medialibrary**
- SEO: **artesaos/seotools**
- Containerization: **Docker** (multi-stage builds) + **Docker Compose**
- Infrastructure-as-Code: **Terraform** (Terraform Cloud workspace)
- Cloud/Provider: **Hetzner Cloud**, **Cloudflare DNS**
- CI/CD: **GitHub Actions** (staging & production workflows)
- Database: **MariaDB** (local Docker service)
- Testing & Quality: **PHPUnit**, **Pint**, **Pail**

---

## Project Structure (high level) 🗂️

- `src/` — Laravel application
  - `app/Livewire/` — Livewire components (ContactForm, SubscriptionForm, EventList, EventShow, SliderList)
  - `app/Filament/Resources/` — Filament CRUD resources for admin
  - `database/migrations/` — schema for events, contacts, subscriptions, media
  - `routes/web.php` — main public routes
- `docker/` — Dockerfiles for dev, staging, prod
- `terraform/` — Terraform Cloud configuration for Hetzner server + Cloudflare DNS
- `.github/workflows/` — GitHub Actions for staging and production deploys
- `docker-compose*.yml` — local/dev/staging/prod compose manifests

---

## What this project demonstrates (for your CV) 🎯

Use these points directly on your resume or portfolio — they reflect concrete, demonstrable skills implemented in this repo:

- **Backend engineering (Laravel & PHP):** Migrations, Eloquent models, validation rules, Livewire components, file storage, soft deletes, model events.
- **Automation / DevOps:** Terraform infrastructure (Hetzner + Cloudflare), GitHub Actions pipelines performing `terraform plan`/`apply`, remote deploy via SSH, running container lifecycle commands, and automated DB backups with retention logic.
- **Containerization & CI/CD:** Multi-stage Docker builds, automated frontend build (Vite) included in image, Docker Compose orchestration on remote server.
- **Operational best practices:** Secrets and environment files handled via GitHub Secrets, Terraform Cloud used for remote state, non-root container user for runtime, automated migrations & optimizations during deploys.
- **Testing & Quality:** PHPUnit-based tests, Laravel Pint formatting, and use of `composer` scripts for setup and local dev orchestration.

---

## How to run locally (quickstart) ▶️

1. Copy `.env.example` to `.env` and adjust values.
2. Run the prepared setup script (requires PHP, Composer, Node):

```bash
# inside `src/` or project root depending on your workflow
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run dev
```

Alternatively, use the included Docker Compose for local dev:

```bash
# from repository root
docker compose up -d --build
# then inside php container
docker compose exec php php artisan migrate
```

There are composer scripts to help:
- `composer setup` — installs deps, generates key, runs migrations, and builds frontend
- `composer dev` — runs concurrent dev services (artisan serve, queue listener, pail logs, vite)

---

## CI/CD & Infrastructure (automation details) 🔁

- GitHub Actions deploy workflows: `/.github/workflows/deploy-staging.yml` and `deploy-production.yml`.
  - Each workflow runs Terraform (init, plan, apply) in a Terraform Cloud workspace and then SSH to the provisioned server to pull code and run `docker compose` commands.
  - Production workflow includes a DB backup step that dumps the DB, saves backups to `/var/backups/intconnect`, and prunes backups older than 30 days.
- Terraform config: `terraform/main.tf` provisions the Hetzner server, firewall rules, and Cloudflare DNS records using variables and secrets.
- Secrets & envs: workflows expect GitHub Secrets like `TERRAFORM_CLOUD_TOKEN`, `HETZNER_TOKEN`, `CLOUDFLARE_API_TOKEN`, SSH keys, and full content variables for `ENV_FILE_PRODUCTION` and `ENV_FILE_STAGING`.

---

## Tests & Quality ✅

- Run unit and feature tests with:

```bash
composer test
# or
php artisan test
```

- Code style with Laravel Pint:

```bash
./vendor/bin/pint
```

---

## Notes & How to include this in your CV 📝

Suggested one-liner for resume/project description:

"Built a production-ready Laravel application with Livewire and Filament, automated infrastructure provisioning with Terraform, and a GitHub Actions CI/CD pipeline deploying containerized releases to Hetzner with Cloudflare DNS and automated DB backups."

Short bullet examples for CV:
- Implemented Terraform IaC for Hetzner servers + Cloudflare DNS and automated GitHub Actions deployment pipelines (staging & production).
- Implemented Laravel backend features (events, contact/subscribe flows) with Livewire and Filament admin; enforced server-side validation and media handling using Spatie.
- Containerized the app with multi-stage Docker builds and automated frontend asset build using Vite.

---

## Where to look in the repo (short pointers) 🔎

- App logic: `src/app/` (models, Livewire components)
- Admin resources: `src/app/Filament/Resources/`
- Docker config: `docker/`, `docker-compose*.yml`
- Terraform and infra: `terraform/`
- Deploy workflows: `.github/workflows/`

---

If you'd like, I can: ✅ generate a shorter one-page project summary for your CV, ✅ draft a GitHub project readme badge section (CI / deploy status), or ✅ tailor the resume bullets for a specific job title (e.g., Backend Engineer / DevOps Engineer). Which would you prefer next?

---

*Generated with attention to highlighting backend automation and operational skills.*
