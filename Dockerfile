FROM php:8.3-apache

# Activer le module mod_rewrite
RUN a2enmod rewrite

# Copier la configuration personnalisée dans le conteneur
COPY apache.conf /etc/apache2/sites-available/000-default.conf