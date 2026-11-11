# Laravel Blog Application

A minimalist blog system built with Laravel, Blade templates, and Tailwind CSS. This project is optimized for serverless deployment on the Vercel platform.

<img width="1261" height="838" alt="image" src="https://github.com/user-attachments/assets/fa3ad0fc-ecb5-40f8-9dad-752940eff32a" />

Visit the live project: [https://laravelblogapplication.vercel.app/](https://laravelblogapplication.vercel.app/)

## Features

* Minimalist dark theme UI with light/dark mode toggle
* Responsive design with Tailwind CSS
* Multi-language support (English, German, Russian)
* PostgreSQL/MySQL/SQLite support via environment configuration
* User authentication and profile functionality based on Laravel Breeze components
* Blog post model, database migration, and post routes
* Vercel serverless deployment configuration

The post routes and database model are present, but the post controller currently implements only the index and create actions. Full post creation, editing, and deletion are not yet available.

## Requirements

* PHP 8.2 or higher
* Composer
* Node.js and npm
* SQLite, MySQL, or PostgreSQL

## Installation

Clone the repository:

```bash
git clone https://github.com/kumowww/laravelblogapplication.git
cd laravelblogapplication
```

Install PHP dependencies and prepare the environment:

```bash
composer install
cp .env.example .env
php artisan key:generate
```

For a local SQLite database:

```bash
touch database/database.sqlite
```

Set the database configuration in `.env`, then run migrations:

```bash
php artisan migrate
```

Install frontend dependencies and build the assets:

```bash
npm install
npm run build
```

## Running the Project

Start the Laravel development server:

```bash
php artisan serve
```

For frontend development with Vite, run this in another terminal:

```bash
npm run dev
```

Open the application at [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Project Structure

* `app/` - controllers, middleware, models, and application logic
* `routes/` - web and authentication routes
* `database/` - migrations, factories, and seeders
* `resources/views/` - Blade templates
* `resources/js/` - Vue pages and frontend components
* `resources/lang/` - localization files for English, Russian, and German
* `public/` - public assets
* `api/` - serverless entry point for Vercel

## Tests

The project uses PHPUnit through Laravel's test runner. Tests use an in-memory SQLite database as configured in `phpunit.xml`.

Run the test suite with:

```bash
php artisan test
```

## Deployment on Vercel

This project includes configuration files for Vercel serverless deployment:

* `vercel.json` - Vercel project configuration
* `api/index.php` - serverless PHP entry point
* `.vercelignore` - files to exclude from deployment

Connect the GitHub repository to Vercel and configure the required environment variables:

```text
APP_KEY=your-generated-app-key
APP_DEBUG=false
APP_URL=https://your-domain.vercel.app
DB_CONNECTION=pgsql
DB_HOST=your-database-host
DB_PORT=5432
DB_DATABASE=your-database-name
DB_USERNAME=your-username
DB_PASSWORD=your-password
```

## Creator

Created by [kumowww](https://github.com/kumowww)

## License

This project is open-source and available under the MIT License.
