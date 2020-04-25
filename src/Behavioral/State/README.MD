### State
> allows an object to change the behavior when its internal state changes. The State pattern is occasionally used in PHP for turning large and cumbersome state machines based on switch operators into objects.
---
> поведенческий паттерн, позволяющий динамически изменять поведение объекта при смене его состояния. Поведения, зависящие от состояния, переезжают в отдельные классы. Первоначальный класс хранит ссылку на один из таких объектов-состояний и делегирует ему работу. Используют в PHP для превращения громоздких стейт-машин, построенных на операторах switch, в объекты.