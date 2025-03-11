# Laravel Task List

## Introduction
This is a simple task list application built using Laravel. It allows users to create, update, delete, and mark tasks as completed or not completed.

## Features
- Create a new task with a title, description, and long description.
- Edit existing tasks.
- View a list of tasks with pagination.
- Mark tasks as completed or not completed.
- Delete tasks.
- Success messages for user actions.
- Uses TailwindCSS for styling.

## Prerequisites
Ensure you have the following installed before running the application:
- PHP 8.0 or later
- Composer
- Laravel 10 or later
- MySQL or SQLite (for database)
- Node.js & NPM (for frontend dependencies, if applicable)

## Installation
1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/task-list-laravel.git
   cd task-list-laravel
   ```
2. Install dependencies:
   ```sh
   composer install
   ```
3. Copy the example environment file and configure your database:
   ```sh
   cp .env.example .env
   ```
   Update the `.env` file with your database credentials.

4. Generate the application key:
   ```sh
   php artisan key:generate
   ```
5. Run migrations to create the database tables:
   ```sh
   php artisan migrate
   ```
6. Start the development server:
   ```sh
   php artisan serve
   ```
   The application will be available at `http://127.0.0.1:8000`.

## Usage
### Create a Task
- Click on `Add Task!` on the homepage.
- Fill in the task title, description, and long description.
- Click `Add Task` to save.

### Edit a Task
- Click on a task title from the list.
- Click `Edit`, modify the details, and click `Update Task`.

### Delete a Task
- Click on a task title.
- Click `Delete` to remove the task permanently.

### Toggle Task Completion
- Click on a task title.
- Click `Mark as completed` or `Mark as not completed` to toggle the completion status.

## File Structure Overview
```
├── app
│   ├── Models
│   │   ├── Task.php  # Defines Task model and methods
│   ├── Http
│   │   ├── Requests
│   │   │   ├── TaskRequest.php # Handles validation
│   │   ├── Controllers
│   │   │   ├── TaskController.php # Handles CRUD operations
├── routes
│   ├── web.php # Defines all application routes
├── resources
│   ├── views
│   │   ├── index.blade.php  # Task list page
│   │   ├── show.blade.php   # Single task view
│   │   ├── create.blade.php # Task creation form
│   │   ├── edit.blade.php   # Task edit form
│   │   ├── layouts
│   │   │   ├── app.blade.php  # Base layout file
├── public
│   ├── css
│   ├── js
│   ├── images
```

## Routes
| Method | URI | Action |
|--------|-----|--------|
| GET | `/` | Redirect to tasks index |
| GET | `/tasks` | Show all tasks |
| GET | `/tasks/create` | Show create form |
| POST | `/tasks` | Store new task |
| GET | `/tasks/{task}` | Show single task |
| GET | `/tasks/{task}/edit` | Show edit form |
| PUT | `/tasks/{task}` | Update task |
| DELETE | `/tasks/{task}` | Delete task |
| PUT | `/tasks/{task}/toggle-complete` | Toggle task completion |

## Technologies Used
- **Laravel**: PHP framework for backend.
- **Blade**: Laravel templating engine.
- **TailwindCSS**: For styling UI elements.
- **Alpine.js**: Lightweight frontend interactions.
- **SQLite/MySQL**: Database support.

## Contribution
Feel free to contribute! Fork the repo, make changes, and create a pull request.

## License
This project is open-source and available under the MIT License.

## Contact
For questions or issues, contact [your email or GitHub profile].

