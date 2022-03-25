# Kollektiva 🏠

 
 
 ## Instalation guide 🌱
 
1. Copy the .env-example into its own .env file and edit the database parameters.

2. Run these command (one row at a time)
 ```
 composer udpate
 php artisan key:generate
 php artisan migrate
 ```

3. Finally simply just run 
```
php artisan serve
```
