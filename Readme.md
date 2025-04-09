# 📌 Table of Contents
1. [Project](#-proposed-solution)  
2. [Prerequisites](#-prerequisites)  
3. [Testing Guide](#-testing-guide)  
4. [Local Deployment](#-local-deployment)

---

## 📌 Proposed Solution
This project is a **web application** built using **Laravel** and **TailwindCSS**, focused on providing a simple user **registration and login** system, along with basic **CRUD operations** for managing user data.

The solution implements server-side rendering through Blade templates and styling through TailwindCSS. The application connects to a **MySQL** database for storing and managing user information.

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

## Local Deployment

Start laragon and npm for vite:
```sh
npm run dev 💻
```



