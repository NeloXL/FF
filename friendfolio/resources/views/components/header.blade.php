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
    @guest
        <section class="logo">
            <img src="{{ asset('assets/img/logoFF.png') }}" style="width: 48px; aspect-ratio: 1/1" alt="Логотип" class="logo-img">
            <div class="logo-text regular">FriendFolio</div>
        </section>

        <section class="buttons">
            <button class="button-white"  id="loginBtn">Войти</button>
            <button class="button-black" id="registerBtn">Зарегистрироваться</button>
        </section>
    @endguest
</header>


<script defer src="assets/JS/main.js"></script>
</body>
</html>
