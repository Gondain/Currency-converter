# Utilise une image PHP avec Apache
FROM php:8.2-apache

# Copie tous les fichiers dans le conteneur
COPY . /xampp/htdocs/40-the-dream-Gondain

# Expose le port 80 (utilisé par Apache)
EXPOSE 80

# Démarre Apache
CMD ["apache2-foreground"]
