# Laravel Blog Application

A minimalist blog system built with Laravel, Blade templates, and Tailwind CSS. This project is optimized for serverless deployment on the Vercel platform.

Visit the live project: [https://laravelblogapplication.vercel.app/](https://laravelblogapplication.vercel.app/)

## Features

* Minimalist dark theme UI with light/dark mode toggle
* Responsive design with Tailwind CSS
* Multi-language support (English, German, Russian)
* PostgreSQL/MySQL/SQLite support via environment configuration
* Vercel serverless deployment ready

## Requirements

* PHP 8.2 or higher
* Composer
* Node.js and npm
* SQLite, MySQL, or PostgreSQL

## Installation

Clone the repository:

git clone https://github.com/kumowww/laravelblogapplication.git

Navigate to the project directory:

cd laravelblogapplication
Install PHP dependencies:

bash
composer install
Install Node dependencies:

npm install
Environment Setup
Copy the example environment file:

cp .env.example .env
Generate application key:

php artisan key:generate
Database
Configure your database in the .env file. For SQLite:

touch database/database.sqlite
Run migrations:

php artisan migrate
Running the Project
Start Vite (Frontend):

npm run dev
Start Laravel server:

php artisan serve
Open in browser: http://127.0.0.1:8000

Project Structure
routes/ - application routes

app/ - core logic (controllers, middleware, models)

resources/views/ - Blade templates

resources/lang/ - localization files (en, ru, de)

public/ - public assets

api/ - serverless entry point for Vercel

Deployment on Vercel
This project includes configuration files for Vercel serverless deployment:

vercel.json - Vercel project configuration

api/index.php - Serverless PHP entry point

.vercelignore - Files to exclude from deployment

To deploy, connect your GitHub repository to Vercel and configure the required environment variables:

text for Vertel or .env:
APP_KEY=your-generated-app-key
APP_DEBUG=false
APP_URL=https://your-domain.vercel.app
DB_CONNECTION=pgsql
DB_HOST=your-database-host
DB_PORT=5432
DB_DATABASE=your-database-name
DB_USERNAME=your-username
DB_PASSWORD=your-password
Future Improvements
Authentication system

CRUD functionality for blog posts

Admin panel

API endpoints

Enhanced UI with more interactive features

Creator
Created by github:kumowww

License
This project is open-source and available under the MIT License.