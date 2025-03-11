# Laravel Task List

## Overview
This is a simple Task List application built using Laravel. It allows users to create, update, delete, and mark tasks as completed. The application is structured using Laravel's MVC architecture and includes pagination for task management.

## Features
- Create, edit, and delete tasks
- Mark tasks as completed or not completed
- Store task data in a database
- User-friendly interface with Tailwind CSS
- Flash messages for user feedback
- Docker support for containerized deployment

## Requirements
- PHP >= 8.0
- Composer
- Laravel >= 9.x
- Docker & Docker Compose (for containerized setup)

## Installation

### Clone the Repository
```sh
git clone https://github.com/your-repository/task-list-laravel.git
cd task-list-laravel
```

### Install Dependencies
```sh
composer install
```

### Set Up Environment
Copy the `.env.example` file to `.env` and configure your database settings:
```sh
cp .env.example .env
```
Generate an application key:
```sh
php artisan key:generate
```

### Run Migrations
```sh
php artisan migrate
```

### Run the Application
```sh
php artisan serve
```
Visit `http://127.0.0.1:8000` in your browser.

## Docker Setup
To run this application in a Docker container, use the following steps:

### Build and Start Containers
```sh
docker-compose up -d --build
```

### Run Migrations in Docker Container
```sh
docker-compose exec app php artisan migrate
```

### Stop Containers
```sh
docker-compose down
```

## File Structure
```
app/
├── Models/
│   ├── Task.php
├── Http/
│   ├── Controllers/
│   │   ├── TaskController.php
│   ├── Requests/
│   │   ├── TaskRequest.php
├── Views/
│   ├── tasks/
│   │   ├── index.blade.php
│   │   ├── show.blade.php
│   │   ├── edit.blade.php
│   │   ├── create.blade.php
├── routes/
│   ├── web.php
├── database/
│   ├── migrations/
│   ├── seeders/
```

## Routes
| Method | Route | Description |
|--------|-------------|----------------------------|
| GET | `/tasks` | Display all tasks |
| GET | `/tasks/create` | Show form to create task |
| POST | `/tasks` | Store a new task |
| GET | `/tasks/{task}` | Show a specific task |
| GET | `/tasks/{task}/edit` | Show form to edit task |
| PUT | `/tasks/{task}` | Update a task |
| DELETE | `/tasks/{task}` | Delete a task |
| PUT | `/tasks/{task}/toggle-complete` | Toggle task completion |

## License
This project is open-source and available under the MIT License.
