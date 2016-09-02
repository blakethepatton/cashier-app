# Cashier App

Kinda just a mess around with laravel and cashier. 

Project home: (https://github.com/blakethepatton/cashier-app) and is based off of (https://school.scotch.io/build-a-monthly-subscription-app-with-laravel-cashier) but built in laravel 5.3

To deploy:

1. `composer install`
2. `npm install`
3. Configure .env
4. Setup Stripe with:
	```
	id=bronze
	name=Bronze
	price=$5

	id=silver
	name=Silver
	price=$10

	id=gold
	name=Gold
	price=$15
	```
5. `php artisan migrate`
6. `php artisan db:seed`
7. `php artisan serve` (Available at localhost:8000 - but you should know that) 
8. If you're modifying css/js - `gulp watch` or just `gulp` for a single change
9. I think that's all... If you see anything do let me know as an issue.


