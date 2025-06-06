# 📋 Projeto: Lista de Usuários Aleatórios com Laravel + Docker

Este projeto é uma aplicação Laravel que consome uma API externa para listar usuários aleatórios com informações detalhadas. Inclui funcionalidades de busca, filtro por país e visualização dos detalhes do usuário. O projeto está totalmente containerizado com Docker para facilitar a execução e a padronização do ambiente.

---

## 🚀 Funcionalidades

- Listagem de usuários com foto, nome, email e localização
- Filtro por país e campo de busca por nome/email
- Página de detalhes do usuário com informações completas
- Redirecionamentos rápidos para Whatsapp e Email
- Recarregamento de novos usuários via botão, com armazenamento em Sessão
- Estilização com Bootstrap 5 e Bootstrap Icons
- Views desacopladas com uso de `@include`
- Proteção contra erros

---

## 🐳 Iniciando com Docker

### Pré-requisitos

- [Docker](https://www.docker.com/products/docker-desktop)
- [Docker Compose](https://docs.docker.com/compose/)

### Passos para subir o projeto

1. Clone o repositório:

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio
```

2. Copie o `.env` de exemplo e ajuste se necessário:

```bash
cp .env.example .env
```

3. Suba os containers:

```bash
docker-compose up -d --build
```

4. Instale as dependências via Docker:

```bash
docker exec -it app composer install
```

5. Faça as migrações necessárias:

```bash
docker compose exec app php artisan session:table
docker compose exec app php artisan migrate
```

6. Gere a chave da aplicação:

```bash
docker exec -it app php artisan key:generate
```

7. Acesse a aplicação na porta configurada:
Ex:

```
http://localhost:8088
```

---

## 🗂 Estrutura de Pastas

```
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   ├── views/
│   │   ├── components/
│   │   ├── user-card.blade.php
│   │   ├── user-detail.blade.php
│   │   └── dashboard.blade.php
├── routes/
│   └── web.php
├── docker-compose.yml
├── Dockerfile
└── .env
```

---

## ✨ Créditos

Este projeto utiliza dados fictícios da [Random User API](https://randomuser.me/).

Desenvolvido com ❤️ por Kayler Moura para Sillion.
