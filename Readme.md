🚀 Login System with Laravel + Blade + TailwindCSS
This project is a simple user login and registration system built with Laravel, using Blade templates for frontend and TailwindCSS for styling.
No JavaScript frameworks like Vue or React are used.

📦 Requirements
PHP 8.1+

Composer

Node.js and NPM

MySQL or any other supported database

⚙️ Installation
Clone the repository:

bash
Copiar
Editar
git clone https://your-repo-url.git
cd your-project-folder
Install PHP dependencies:

bash
Copiar
Editar
composer install
Install Node.js dependencies:

bash
Copiar
Editar
npm install
Copy the environment file and generate the app key:

bash
Copiar
Editar
cp .env.example .env
php artisan key:generate
Configure your .env file:

Update your database settings:

ini
Copiar
Editar
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
Run database migrations:

bash
Copiar
Editar
php artisan migrate
🛠️ Running the Project
Start the Laravel development server:

bash
Copiar
Editar
php artisan serve
Start Vite (for CSS and assets building):

bash
Copiar
Editar
npm run dev
🖥️ How to Use
Visit http://localhost:8000/register to create a new account.

Visit http://localhost:8000/login to log in with your credentials.

Both pages are styled with TailwindCSS and use Blade templates.
Form validation errors and CSRF protection are handled automatically by Laravel.

📚 Technologies Used
Laravel – Backend framework

Blade – Templating engine

TailwindCSS – Utility-first CSS framework

Vite – Frontend build tool (for compiling CSS)

📢 Notes
No JavaScript frameworks like Vue.js or React are used.

Vite is only used for compiling TailwindCSS stylesheets (resources/css/app.css).

The frontend is entirely server-rendered using Blade templates.



If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
