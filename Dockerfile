# Dockerfile
FROM php:8.2-apache

# 1. Instalar dependencias del sistema y Python
RUN apt-get update && apt-get install -y \
    python3 \
    python3-pip \
    libmariadb-dev \
    && rm -rf /var/lib/apt/lists/*

# 2. Instalar extensiones de PHP necesarias para MySQL
RUN docker-php-ext-install pdo pdo_mysql mysqli

# 3. Habilitar mod_rewrite de Apache (vital para frameworks y SaaS)
RUN a2enmod rewrite

# 4. Definir directorio de trabajo
WORKDIR /var/www/html