# Структура проекта

***

## Корень проекта:

* docker/ - образы и настройки для docker
* docs/ - документация к API, также лежат готовые коллекции Postman
* readme/ - файлы документации к readme
* src/ - рабочая папка проекта
* .env.example, .env - конфиги проекта (docker)
* docker-compose.yml - настройка для запуска docker контейнера
* init.sh - настройка выполнения команд (копирования файлов, смен прав доступа...)

***

## О проекте:

Проект написан на Laravel, запуск через Docker: [инструкция](start.md).

### Models:

Имеется 1 сущность (модель), для которой созданы миграции, фабрики и сидры:

* Сотрудник: _**Guest**_

### Api:

Документация к Api ([ссылка](doc_api.md))

В корневой директории docs/ находится Postman json-файл с коллекциями для работы с Api:
[ссылка](../docs/Laravel-Guests.postman_collection.json)

### Functional:

* Миграция - _true_;
* Фабрики и сидры - _true_;
* Валидация - _true_;
* Документация к Api - _true_;
* Тесты PHPUnit - _false_;
* Панель администрации - _false_;
* Аутентификация/Авторизация - _false_;

***

## Структура кода:

В директории src/:

* routes/ - роуты Api;
* database/ - миграции, фабрики и сидры для сущностей;
* app/:
    * DataKeeper/ - классы для хранения статичных данных (данные стран);
    * DTO/ - (Data Transfer Object), классы со свойствами и getters/setters;
    * Exceptions/ - обработка исключений;
    * Factories/ - классы для создания объектов и их заполнения свойствами (создание DTO);
    * Http/ - классы: Controllers для обработки роутов и Requests для валидаций;
    * Models/ - модели;
    * Repositories/ - классы с логической частью для обращения к бд (CRUD);
    * Rules/ - кастомные правила для валидации;
    * Services/ - вспомогательные классы для обработки данных.