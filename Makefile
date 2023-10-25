setup:
	composer install
	npm ci
	cp -n .env.example .env
	touch database/database.sqlite
	php artisan migrate