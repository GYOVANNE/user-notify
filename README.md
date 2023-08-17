


# Start application
```sh
 docker-compose up -d

```
- run migrations

# Test
```php
php artisan test
```

# Api request

```php
curl --location --request POST 'http://localhost:8000/api/inbox' \
--header 'Content-Type: application/json' \
--data-raw '{
    "user_id":"1",
    "subject":"Mensagem de teste",
    "message":"Corpo da mensagem"
}'

```

# mailhog

```sh
http://localhost:8025/
``````

