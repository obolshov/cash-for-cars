# Cash for Cars (test assignment)

## Getting started

Crete .env and set appropriate variables:
```bash
cp .env.example .env
```

Install frontend dependencies
```bash
npm install
```

Generate the build
```bash
npm run prod
```

Start application docker containers:
``` bash
docker-compose up -d
```

Install backend dependencies and generate app key:
```bash
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
```

Database migrations install
```bash
docker-compose exec app php artisan migrate
docker-compose exec app php artisan db:seed
```

Application server should be ready on `http://localhost:<APP_PORT>`
