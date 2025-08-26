# Inception
[![Docker](https://img.shields.io/badge/Docker-Blue?logo=docker&logoColor=white)](https://www.docker.com/)
[![WordPress](https://img.shields.io/badge/WordPress-21759B?logo=wordpress&logoColor=white)](https://wordpress.org/)
[![MariaDB](https://img.shields.io/badge/MariaDB-003545?logo=mariadb&logoColor=white)](https://mariadb.org/)
[![NGINX](https://img.shields.io/badge/NGINX-009639?logo=nginx&logoColor=white)](https://nginx.org/)

## Dockerized Multi-Service Infrastructure
This project sets up a **multi-container infrastructure** using Docker Compose.  
It includes:

- **NGINX** (TLSv1.3)  
- **WordPress + PHP-FPM**  
- **MariaDB**  
- Dedicated volumes for the database and website files  
- A Docker network connecting all containers  

Each container is **built from scratch** using custom Dockerfiles, ensuring modularity and maintainability.

## Architecture
<img width="297" height="388" alt="Screenshot 2025-08-25 at 14 37 53" src="https://github.com/user-attachments/assets/f9cbef04-d41a-4369-8a47-b40b739b7f36" />

## Prerequisites
- `Docker`
