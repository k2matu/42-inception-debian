#!/bin/sh

envsubst < etc/nginx/sites-available/default.template > etc/nginx/sites-available/default

cat etc/nginx/sites-available/default

exec nginx -g daemon off;