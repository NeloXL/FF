<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
</head>
<body>
<header>
    <!--**
    @guest
        <section class="logo">
            <img src="{{ asset('assets/img/logoFF.png') }}" style="width: 48px; aspect-ratio: 1/1" alt="Логотип" class="logo-img">
            <div class="logo-text regular">FriendFolio</div>
        </section>

        <section class="buttons">
            <button class="button-white"  id="openModal">Войти</button>
            <button class="button-black" id="openModal2">Зарегистрироваться</button>
        </section>
    @endguest

        **-->
    <section class="logo">
        <img src="{{ asset('assets/img/logoFF.png') }}" style="width: 48px; aspect-ratio: 1/1" alt="Логотип" class="logo-img">
        <div class="logo-text regular">FriendFolio</div>
    </section>
    @guest
        <section class="buttons">
            <button class="button-white"  id="openModal">Войти</button>
            <button class="button-black" id="openModal2">Зарегистрироваться</button>
        </section>
    @endguest
    @auth
        <section class="buttons">
            <form action="{{route("logout")}}">
                <button class="button-black">Выйти</button>
            </form>
        </section>
    @endauth
</header>

<dialog id="modal" class="modal">
    <div class="modal-body">
        <button id="closeModal" class="close-button-for-modal">&#10006;</button>

        <div class="top-part-modal">
            <div id="top-part-modal-texts" class="top-part-modal-texts">
                <p id="loginTab" class="modal-login active">Войти</p>
                <p id="registerTab" class="modal-register">Регистрация</p>
            </div>
            <div class="top-part-modal-rectangle"></div>
        </div>


        <div class="form-for-login form active" id="loginForm">
            <form action="{{route('login.post')}}" method="POST">
                @csrf
                <h2>Добро пожаловать!</h2>
                <p>Введите данные для входа</p>
                <label for="email">Email</label><br>
                <input type="text" class="modal-input" placeholder="Введите ваш email" id="email" name="email"><br>
                <label for="password">Пароль</label><br>
                <input type="password" class="modal-input" placeholder="Введите ваш пароль" id="password" name="password"><br>
                <button type="submit" class="button-black">Войти</button>
                @if($errors->any())
                    Привет у тебя ошибка
                @endif
            </form>
        </div>


        <div class="form-for-register form" id="registerForm">
            <form action="{{route('register.post')}}" method="POST">
                @csrf
                <h2>Создать аккаунт</h2>
                <p>Начните сохранять важные моменты</p>
                <label for="name">Имя</label><br>
                <input type="text" class="modal-input" placeholder="Введите ваше имя" id="name" name="name"><br>
                <label for="emailReg">Email</label><br>
                <input type="email" class="modal-input" placeholder="Введите ваш email" id="emailReg" name="emailReg"><br>
                <label for="passwordReg">Пароль</label><br>
                <input type="password" class="modal-input" placeholder="Введите ваш пароль" id="passwordReg" name="passwordReg"><br>
                <button type="submit" class="button-black">Зарегистрироваться</button>
            </form>
        </div>
    </div>

</dialog>
<script defer src="assets/JS/main.js"></script>
</body>
</html>
