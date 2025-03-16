## PRA RODAR!!

```
docker compose up -d --build
```

```
cp .env.example .env
```

```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=agendai
DB_USERNAME=root
DB_PASSWORD=
```

```
docker compose exec app bash composer install
```

```
composer install
```

```
php artisan key:generate
```
```
php artisan migrate
```

## Entrar no diretório do Adendai e rodar:

```
npm install
```

```
npm run build
```

```
npm run dev
```


