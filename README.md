# Cash for Cars (test assignment)

## Getting started

Create .env (all variables are already set)
```bash
cp .env.example .env
```

Install frontend dependencies
```bash
npm install
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

Migrate database
```bash
docker-compose exec app php artisan migrate
```

Install voyager
```bash
docker-compose exec app php artisan voyager:install
```

Then import dump `dump-cash_for_cars.sql` into the newly created database.

Application server should be ready on `http://localhost:8000`

To edit the content of the landing page, you need to go to the admin panel using the link `http://localhost:8000/admin/contents/1/edit`. The page content is presented as a JSON string, which has a strict hierarchy.
