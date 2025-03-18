FROM debian:11

RUN apt update && apt upgrade && apt install -y nginx

COPY conf/default ./etc/nginx/sites-available/.
COPY certs/ /etc/nginx/certs/

CMD ["nginx", "-g", "daemon off;"]