#!/bin/sh
# Makefile for news.ai
build-fresh:
	docker build -t cornatul/todayintel.com:latest --no-cache --progress=plain .
up:
	docker-compose up -d
stop:
	docker-compose down
restart-horizon:
	docker exec -it app_server supervisorctl restart laravel-horizon:*
push:
	docker push cornatul/todayintel.com:latest
watch:
	npm run watch
frontend:
	npm run production
