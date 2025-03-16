# Definições
SHELL := /bin/bash
BACKEND_DIR := backend
DOCKER_COMPOSE := cd $(BACKEND_DIR) && docker compose

CONTAINER_NAME = app

# Subir o ambiente e preparar o Laravel
start:
	$(DOCKER_COMPOSE) up -d
	$(DOCKER_COMPOSE) exec $(CONTAINER_NAME) composer install
	$(DOCKER_COMPOSE) exec $(CONTAINER_NAME) cp .env.example .env || true
	$(DOCKER_COMPOSE) exec $(CONTAINER_NAME) php artisan key:generate
	$(DOCKER_COMPOSE) exec $(CONTAINER_NAME) php artisan migrate --seed
	$(DOCKER_COMPOSE) exec $(CONTAINER_NAME) php artisan storage:link

up:
	$(DOCKER_COMPOSE) up -d
# Parar os contêineres
stop:
	$(DOCKER_COMPOSE) down
# Exibir ajuda
help:
	@echo "Comandos disponíveis:"
	@echo "  make up        - Subir o ambiente e instalar dependências"
	@echo "  make stop      - Parar os contêineres"
	@echo "  make phpstan   - Rodar análise estática do código"
	@echo "  make pint      - Rodar Laravel Pint para formatar código"
	@echo "  make check     - Rodar PHPStan e Pint juntos"
	@echo "  make help      - Mostrar esta ajuda"
	@echo "  make bash      - Entrar no shell do contêiner"
