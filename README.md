Article App Porject

Windows Installation

Prerequisite system requirement
- Composer
- Laravel
- Xampp (Maria + PHP + Perl)
 
1. Install Xampp
    - Apache + MariaDB + PHP + Perl
2. Start MariaDB from Xampp control panel
4. Open command prompt enter command line below:
    - 'C:\xampp\mysql\bin>mysql.exe -u root -p'
    - 'create database article;'
    - press Ctrl with C to exit
3. Unzip the file
4. Open command prompt enter command line below:
    - cd to unzipped folder
    - composer install
    - cp .env.example .env
    - php artisan key:generate
5. Use VS code open project folder update .env file change DB_DATABASE=article
6. Open command prompt enter command line below:
    - php artisan migrate
    - php artisan db:seed
    - php artisan serve
7. launch http://localhost:8000/
8. login with pre-setup admin user
    - email:user1@admin.com
    - password:user1

