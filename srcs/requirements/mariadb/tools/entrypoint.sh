#!/bin/sh

envsubst < /etc/mysql/init.sql.template > /etc/mysql/init.sql

exec /script.sh