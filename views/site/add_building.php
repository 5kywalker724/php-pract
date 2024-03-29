<form method="post" class="title form_add">
    <h2 class="title_add_room center">Добавление здания</h2>
    <h3 class="center"><?= $message ?? ''; ?></h3>
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input type="text" name="name" placeholder="Название">
    <input type="text" name="address" placeholder="Адрес">
    <button>Добавить</button>
</form>
