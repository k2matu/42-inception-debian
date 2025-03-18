all : up

COMPOSE_FILE = ./srcs/docker-compose.yml
ENV_FILE = ./srcs/.env

up :
	docker-compose --env-file $(ENV_FILE) -f $(COMPOSE_FILE) up --build

down :
	docker-compose --env-file $(ENV_FILE) -f $(COMPOSE_FILE) down -v