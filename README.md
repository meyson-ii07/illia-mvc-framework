---
Вимоги
-
1. Мінімальна версія php 7.4
2. MySQL 5.7
3. Composer
   
**.env файл**

Потрібно встновити параметри доступу до БД:
```
DB_DSN = mysql:host=127.0.0.1;port=3306;dbname=students
DB_USER = root
DB_PASSWORD = password
```
---
Розгортання проекту:
-
1. Стягнути репозиторій
2. виконати composer update
3. виконати php migration.php




