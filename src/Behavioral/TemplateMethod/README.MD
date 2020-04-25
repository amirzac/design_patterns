### Template method
> allows you to defines a skeleton of an algorithm in a base class and let subclasses override the steps without changing the overall algorithm’s structure. The Template Method pattern is quite common in PHP frameworks. The pattern simplifies the extension of a default framework’s behavior using the class inheritance.
---
> поведенческий паттерн, задающий скелет алгоритма в суперклассе и заставляющий подклассы реализовать конкретные шаги этого алгоритма.

> Применимость: Шаблонные методы можно встретить во многих PHP-фреймворках. Разработчики создают такие методы, чтобы позволить клиентам легко и быстро расширять стандартный код при помощи наследования.

> Признаки применения паттерна: Класс заставляет своих потомков реализовать методы-шаги, но самостоятельно реализует структуру алгоритма.