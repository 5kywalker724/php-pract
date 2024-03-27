<h2 class="title_signup center">Авторизация</h2>
<h3 class="center"><?= $message ?? ''; ?></h3>

<h3 class="center"><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post" class="title form">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <button>Войти</button>
    </form>
<?php endif;
