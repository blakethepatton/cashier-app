# Cashier App

Kinda just a mess around with laravel and cashier. 

[Project home](https://github.com/blakethepatton/cashier-app) and is based off of [this](https://school.scotch.io/build-a-monthly-subscription-app-with-laravel-cashier) but built in laravel 5.3

To deploy:

1. `composer install --no-scripts && composer run-script post-root-package-install && composer run-script post-install-cmd && composer run-script post-create-project-cmd && npm-install`
2. Configure .env 
3. Setup Stripe with:
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
4. `php artisan migrate`
5. `php artisan db:seed`
6. `php artisan serve` (Available at localhost:8000 - but you should know that) 
7. If you're modifying css/js - `gulp watch` or just `gulp` for a single change
8. I think that's all... If you see anything do let me know as an issue.


