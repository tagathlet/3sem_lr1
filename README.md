# Отчет о лабораторной работе №1 

## Задание:
Разработать систему аутентификации

## Пользовательсктй интерфейс
https://www.figma.com/proto/XrmqcO9hpQ3loDWzgzlLyc/Untitled?node-id=1%3A2&starting-point-node-id=1%3A2

## Пользовательские сценарии
 - регистрация
    - вводит корректный логин и пароли совпадают - сообщение об успешно регистрации
    - вводит уже существующий логин - сообщение о том, что логин уже существует
    - введенные пароли не совпадают - сообщение о том, что пароли не совпадют
 - авторизация
    - вводит корректный логин и пароль - перенаправляется на страницу с контентом
    - вводит некорректный логин или пароль - сообщение о неверном пароле или логине
 - выход
    - выходит со страницы с контентом, перенаправляется на страницу входа
- при попытке зайти на страницу с контентом без футентификации - сообщение о недоступности страницы
- при успешной аутентификации может заходить на страницу с контентом до момента, пока не выйдет из аккаунта

## Xреография сервера
https://sequencediagram.org/index.html#initialData=FAYQNglgpgdgLgWgHwGUoCcBuGBcACAcQFEAVPCGAEygA8A6ACzgFsxRJY4AeBBNLXACYADMLwB5ANLto8ZP2zp8xMgGcIAcxgU6ABwa6A-GAD2GigF5MAQzAAyXddWqA7ifSUrtmZx58MijgAzMJBeABKUJQQ6FAAxnDkVLQA9Pq6ANQu6CYwGgD6zFDO1hpQPnKoAbiEpHjqWjrpxmaWNvaOzm4eXmzgsty8CrghYZHRsQl4cblwnHoGGTMmANbQqhWIVQJKtWqaMCYAZkeMLH0c8H7DSqMRUTHxiRTU9OkIy2vFm-LVuyr1A4AV10+SO7mYZ1Ym2ufxwIjEUh+20Ce0BjRgCyMpnMMF6Dicrncnnadliuig1jg+U6RJ67SAA

## Структурв базы данных
|Название|Тип данных  |Описание               | 
|--------|------------|-----------------------|
|id      |int(2)      |первичный ключ         |
|login   |varchar(255)|логин пользователя     |
|password|varchar(255)|хеш пароля пользователя|

## Алгоритмы
-вход в аккаунт
  https://github.com/tagathlet/3sem_lr1/blob/main/signin.drawio.png
  
-регистрация
  https://github.com/tagathlet/3sem_lr1/blob/main/signup.drawio.png
  
-Выход из аккаунта
  https://github.com/tagathlet/3sem_lr1/blob/main/signoff.drawio.png
