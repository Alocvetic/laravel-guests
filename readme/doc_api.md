# Документация к API

***

Директория: docs/

1. Установить redoc-cli в корне проекта: `sudo npm i -g redoc-cli`
2. Запустить команду в корне проекта: `redoc-cli serve docs/openapi.yaml`
3. Если не получилось запустить, то можно сделать html-файл в папке docs/:
    - `cd docs/` & `redoc-cli build openapi.yaml`
    - появится/обновится файл: _**redoc-static.html**_