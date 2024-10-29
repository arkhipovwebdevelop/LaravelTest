


## Запуск проекта

 1. Установить коммандами <b>"npm i"</b> и <b>"composer install"</b> все нужные пакеты
 2. Импортировать БД <b>"test_laravel"</b> из этой папки
 3. Войти в папку проекта - <b>"cd laravel-test"</b> после чего запустить проект коммандой <b>"php artisan serve"</b>


## Функции проекта

1. По переходу на "/" встречает заглушка в которую можно поместить кнопку на редирект на "/login"
2. Перейдите по маршруту <b>"/login"</b> где вас встречает форма логина
    Логин и пароль определенны в БД, опишу тут
    <b>Log: admin@example.com
    Password: password</b>
Пароль хэшируется
3. После успешного логина попадаем на маршрут "dashboard" об успешном логине
4. Перейдите по маршруту <b>"/admin"</b> чтобы увидеть админ панель
5. По ссылке управление продуктам вы переходите по маршруту <b>"admin/products"</b>, внутри можно  посмотреть все товары которые есть в бд, также перейти по ссылке "Добавить новый продукт", совершить дейтсвия "Изменить" или "Удалить" уже с существующими продуктами.
6. При переходе по ссылке "Добавить новый продукт" попадаете на форму добавления продукта по маршруту <b>"/admin/products/create"</b>
6. По ссылке управление пользователями вы переходите по маршруту <b>"admin/users"</b>, внутри можно посмотреть всех пользователей которые есть в бд, также перейти по ссылке "Добавить нового пользователя", совершить дейтсвия "Изменить" или "Удалить" уже с существующими пользователями. 
7. При переходе по ссылке "Добавить нового пользователя" попадаете на форму добавления пользователя по маршруту <b>"/admin/users/create"</b>
8. По ссылке управление категориями вы переходите по маршруту <b>"admin/categories"</b>, внутри можно посмотреть все категории которые есть в бд, также перейти по ссылке "Добавить новую категорию", совершить дейтсвия "Изменить" или "Удалить" уже с существующими категориями.
7. При переходе по ссылке "Добавить новую катгеорию" попадаете на форму добавления пользователя по маршруту <b>"/admin/categories/create"</b>