help:
	make -C .. help

up:
	make -C .. up
	./setup-git-hooks.sh

down:
	@make -C .. down

stop:
	make -C .. stop

# Rodar PHPStan
phpstan:
	./vendor/bin/phpstan analyse

# Rodar Laravel Pint
pint:
	./vendor/bin/pint

# Rodar ambos (PHPStan e Pint)
check:
	make phpstan
	make pint

bash:
    make -C .. bash
