<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Features
- Create Todos: Add new todos with a title and description to keep track of your tasks.
- View Todos: See all your todos displayed on the page with their titles and descriptions.
- Mark as Completed: When you've finished a task, simply mark it as completed, and it will be removed from view.

## Installation
- Clone the repository to your local machine using the following command:
```
git clone https://github.com/far0uq/todo-list.git
```

- Navigate to the project directory:
```
cd todo-list
```

- Install the dependencies using Composer.

- Configure the database settings in the .env file with your database credentials. Set the following values:
```
DB_CONNECTION=mysql
DB_HOST=your_database_host
DB_PORT=your_database_port
DB_DATABASE=databaseForTodos
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

- Run the database migrations to set up the required tables:
```
php artisan migrate
```

- Start the development server:
```
php artisan serve
```

- Open your browser and visit http://localhost:8000 to access the Todo App!

##Usage
- Once you access the Todo App in your browser, you will be presented with an input field and a button to save item.
- Enter a title for your todo in the provided field.
- Click on the "Save Item" button to add the todo to the list.
- Your new todo will appear at the bottom of the list.
- To mark a todo as completed and remove it from view, click on the "Mark Complete" button for that todo.
- The completed todo will disappear from the list, leaving you with a clean view of your active todos.
