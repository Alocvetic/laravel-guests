# Запуск проекта

***

1. назовите проект - laravel-guests
    - это нужно, чтобы корректно работали маршруты и пути в файлах для работы докера
2. Нужно создать Docker Compose. Если есть плагин Docker в PhpStorm (или в другой IDE), то нужно указать сервисы:
   php-fpm, nginx, mysql, phpmyadmin
3. укажите сепаратор LF в:
   * для корневого файла init.sh;
   * в docker/ в каждом сервисе для файлов с форматом sh;
4. в корне проекта выполнить команду: `chmod 770 init.sh`
5. в корне проекта выполнить команду: `sh init.sh`
6. запустить docker через плагин в IDE (или командой: docker compose up -d сервисы...), дождаться запуска mysql
7. перейти в корень проекта и выполнить `sudo chown -R имя_пользователя:группа_пользователя src/`

Запуск миграций с сидрами (в терминале сервиса php-fpm):
`php artisan migrate:fresh -seed`
