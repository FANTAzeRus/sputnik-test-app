## Задача
Создайте GET-эндпоинт /api/prices, который возвращает JSON-список товаров (id, title, price).
При передаче параметра currency (RUB, USD, EUR) — возвращайте цену с конвертацией (RUB = 1; USD = 90; EUR = 100) и форматированием ($1.50, €2.00, 1 200 ₽).

Используйте Laravel 8+ и Laravel Resource. Ответ — в формате JSON.

## Установка
```bash
git clone git@github.com:FANTAzeRus/sputnik-test-app.git
```
```bash
cd sputnik-test-app
```

```bash
composer install
```

## Запуск
```bash
php artisan serve
```

## Проверка

[Запрос без указания валюты](http://127.0.0.1:8000/api/prices)

[Запрос с указанием валюты RUB](http://127.0.0.1:8000/api/prices?currency=RUB)

[Запрос с указанием валюты USD](http://127.0.0.1:8000/api/prices?currency=USD)

[Запрос с указанием валюты EUR](http://127.0.0.1:8000/api/prices?currency=EUR)
