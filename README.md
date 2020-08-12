Things that need to be done after pulling from the github:

set up the environment

create a new file named .env or copy
copy the env.examlple file and paste it in .env file
Create an empty database

run the following command in sequence :

composer install
php artisan key:generate
set the database confiquration in .env file

run the following command in sequence :
-php artisan migrate
-php artisan db:seed
