# Setup Docker Laravel 11 com PHP 8.3

### Passo a passo

Clone Repositório

```sh
git clone https://github.com/Coimbra777/Agendai.git
```

```sh
cd backend
```

Suba os containers do projeto

```sh
docker compose up -d
```

Crie o Arquivo .env

```sh
cp .env.example .env
```

Acesse o container app

```sh
docker compose exec app bash
```

Instale as dependências do projeto

```sh
composer install
```

Gere a key do projeto Laravel

```sh
php artisan key:generate
```

Rodar as migrations

```sh
php artisan migrate
```

Acesse o projeto
[http://localhost:8000](http://localhost:8000)

Para Executar o front

```sh
cd frontend/agendai
```

Rodar o NPM

```sh
npm install
```

```sh
npm run dev
```

Acesse o projeto
[http://localhost:5173/](http://localhost:5173/)
