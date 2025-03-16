#!/bin/bash

# Diretório do repositório Git
HOOKS_DIR="../.git/hooks"

chmod +x git_hooks/*
cp git_hooks/* $HOOKS_DIR

echo "Todos os hooks foram configurados com sucesso!"
