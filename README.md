#create database with name `best_place`
mysql -u root -p -e "CREATE DATABASE best_place"
if you'r mysql password not a 'password' or not a default,
in .env file add your password in line
DB_DATABASE=best_place
DB_USER=root
DB_PASSWORD=

composer install
php artisan key:generate
php artisan storage:link
php artisan migrate --seed
npm install

php artisan serve
Now, open in browser link http://127.0.0.1:8000
