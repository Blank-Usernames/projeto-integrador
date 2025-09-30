# Configurações de Instalação do Servidor Apache
FROM php:8.2-apache

USER root

# Atualizar e Corrigir possíveis problemas no apt e instalar dependências
RUN mkdir -p /var/lib/apt/lists && \
    chmod 755 /var/lib/apt/lists && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    apt-get update && apt-get install -y \
    nano \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    && docker-php-ext-install pdo_mysql zip gd bcmath \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Habilitar mod_rewrite do Apache (necessário para Laravel) .htacess
RUN a2enmod rewrite

# Baixe e instale o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# define o diretório raiz da aplicação
WORKDIR /var/www/html/

# Permissões para pasta storage e bootstrap/cache
RUN mkdir -p /var/www/html/laravel/storage /var/www/html/laravel/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/laravel/storage \
    && chmod -R 775 /var/www/html/laravel/bootstrap/cache


# Expor a porta padrão do Apache
EXPOSE 80
