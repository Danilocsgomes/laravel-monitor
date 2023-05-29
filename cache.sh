chown -R laradock.laradock /var/www  &&
php artisan config:cache &&
php artisan cache:clear &&
php artisan view:clear &&
php artisan route:clear
