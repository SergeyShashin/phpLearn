#Modern MVC app (Geekbrains PHP 2)

Принцип работы

- Создаём приложение Application (singleton)
- Cоздаём объект Request и регистрируем в Application
- Создаём объект Router (с параметрами из Request) и регистрируем в Application
- Инициализируем маршрут и ищем Controller
- Создаём Controller, передаём ему Request (в конструкторе)
- Вызываем action у Controller
- При необходимости подключаем Model или ActiveRecord (DBAL)
- При необходимости подключаем View (оболочка для Twig)
- Вызываем в action у Contoller возврат view() или json()
- Полученный результат вернётся в Application
- Application отдаёт результат пользователю

