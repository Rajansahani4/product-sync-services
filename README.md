# Product Sync Service

A Laravel application that syncs product data from an external API into a local database using queued jobs, with a paginated REST API to browse synced products.

---

## Requirements

- PHP >= 8.3
- Composer
- A supported database (MySQL, PostgreSQL, or SQLite)

---

## Setup Instructions

### 1. Clone the repository

```bash
git clone <repository-url>
cd product-sync-services
```

### 2. Install dependencies

```bash
composer install
```

### 3. Create the environment file

```bash
cp .env.example .env
```

### 4. Generate the application key

```bash
php artisan key:generate
```

### 5. Configure your database

Open `.env` and set your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

> The queue driver is already set to `database` in `.env.example`, so no additional queue configuration is needed.

### 6. Run migrations

```bash
php artisan migrate
```

---

## Running the Application

### Step 1 — Start the development server

```bash
php artisan serve
```

### Step 2 — Start the queue worker (in a separate terminal)

```bash
php artisan queue:work
```

> This must be running to process the sync jobs. Keep this terminal open.

### Step 3 — Run the product sync command

```bash
php artisan app:sync-products-command
```

This command fetches products from the external API and dispatches a queue job to upsert them into the database. Check the queue worker terminal to confirm jobs are processed.

---

## API Endpoint

Once the sync is complete, browse the synced products via:

```
GET http://127.0.0.1:8000/api/v1/products
```

**Pagination** is supported via the `page` query parameter:

```
GET http://127.0.0.1:8000/api/v1/products?page=2
```

You can test this in Postman or any HTTP client.

---

## Notes & Assumptions

- The sync command is **idempotent** — running it multiple times will not create duplicate records. Products are matched by `external_id` and upserted.
- Sync activity and any failures are logged to `storage/logs/laravel.log`.
- Queue jobs are stored in the database (`jobs` table), so no Redis or external queue service is required.
