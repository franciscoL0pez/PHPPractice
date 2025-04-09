# 📌 Table of Contents
1. [Proposed Solution](#-proposed-solution)  
2. [Project Challenges](#-project-challenges)  
3. [Prerequisites](#-prerequisites)  
4. [Testing Guide](#-testing-guide)  
5. [Local Deployment](#-local-deployment)

---

## 📌 Proposed Solution
This project is a **web application** built using **Laravel** and **TailwindCSS**, focused on providing a simple user **registration and login** system, along with basic **CRUD operations** for managing user data.

The solution implements server-side rendering through Blade templates and styling through TailwindCSS. The application connects to a **MySQL** database for storing and managing user information.

Routing, validation, session management, and error handling are managed using Laravel’s built-in features. No Docker or external API tools like Postman were used, as all interactions are through web forms.

---

---

## 🔧 Prerequisites
Before running the project, make sure you have installed:

- **PHP (v8.1 or higher)**
- **Composer**
- **Laravel (v10 or higher)**
- **MySQL**
- **Node.js and npm** (for Vite and TailwindCSS)

To install the necessary PHP dependencies:

```sh
composer install
```

To install the frontend dependencies:
```sh
npm install
```
And to compile the frontend assets:

```sh
npm run dev
```
You also need to configure your .env file, setting up the MySQL database connection:

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
Then, run the migrations to create the necessary tables:
```sh
php artisan migrate
```


