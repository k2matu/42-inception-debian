all : up

COMPOSE_FILE = ./srcs/docker-compose.yml
ENV_FILE = ./srcs/.env

up :
	docker-compose --env-file $(ENV_FILE) -f $(COMPOSE_FILE) up -d

down :
	docker-compose --env-file $(ENV_FILE) -f $(COMPOSE_FILE) down -v

stop :
	docker-compose --env-file $(ENV_FILE) -f $(COMPOSE_FILE) stop

start :
	docker-compose --env-file $(ENV_FILE) -f $(COMPOSE_FILE) start

rebuild : down
	docker-compose --env-file $(ENV_FILE) -f $(COMPOSE_FILE) up --build

status :
	docker ps

.PHONY : all up down stop start status