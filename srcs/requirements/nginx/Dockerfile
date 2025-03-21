FROM debian:11

RUN apt update && apt upgrade -y && apt install -y \
	nginx \
	gettext-base

COPY conf/default ./etc/nginx/sites-available/default.template

COPY certs/ /etc/nginx/certs/
COPY tools/entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh

CMD ["./entrypoint.sh"]