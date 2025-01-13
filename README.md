<h1 align="center">
  <br/>

  Covid 19 vac academic control
</h1>

<p align="center">
  <img alt="GitHub language count" src="https://img.shields.io/github/languages/count/LucasPereiraMiranda/covid19-vac-academy-control">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/LucasPereiraMiranda/covid19-vac-academy-control">
  
  <a href="https://github.com/LucasPereiraMiranda/covid19-vac-academy-control/commits/master">
    <img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/LucasPereiraMiranda/covid19-vac-academy-control">
  </a>

  <a href="https://github.com/LucasPereiraMiranda/covid19-vac-academy-control/issues">
    <img alt="Repository issues" src="https://img.shields.io/github/issues/LucasPereiraMiranda/covid19-vac-academy-control">
  </a>

  <a href="https://github.com/LucasPereiraMiranda/covid19-vac-academy-control/issues">
    <img alt="GitHub license" src="https://img.shields.io/github/license/LucasPereiraMiranda/covid19-vac-academy-control">
  </a>
</p>

<br>


## 🚀 Techs
This project was developed with these technologies:

- [Laravel](https://laravel.com/)
- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [PostgreSQL](https://www.postgresql.org/)
- [Eloquent ORM](https://laravel.com/docs/eloquent)

## 💻 Project

Development of a basic web-based vaccine control system as a practical activity for Web I course at UFOP in the 2021/1 semester.

---

## Setup Steps

### 1. Update Dependencies
Run the following command to update the project dependencies:
```bash
composer update
```

### 2. Install Dependencies
After updating, install all necessary dependencies with the command:
```bash
composer install
```

### 3. Install the PDO Driver for PostgreSQL
The project uses PostgreSQL as the database. You need to install the PDO driver:
```bash
sudo apt-get install php-pgsql
```

### 4. Configure Environment Variables
Copy the `.env.example` file and rename it to `.env`:
```bash
cp .env.example .env
```

### 5. Migrate the Database
Run the migrations to create the database tables:
```bash
php artisan migrate
```

### 6. Run the Application
Finally, start the application with the command:
```bash
php artisan serve
```
The application will be available at: **http://localhost:8000**








