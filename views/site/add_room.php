<form method="post" class="title form_add">
    <h2 class="title_add_room center">Добавление помещения</h2>
    <h3 class="center"><?= $message ?? ''; ?></h3>
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input type="text" name="name" placeholder="Название">
    <select name="room_type_id">
        <?php
        foreach ($roomtypes as $roomtype) {
            echo '<option value="'.$roomtype->id.'">'.$roomtype->name.'</option>';
        }
        ?>
    </select>
    <input type="number" name="room_square" placeholder="Площадь помещения">
    <input type="number" name="seats" placeholder="Количество посадочных мест">
    <button>Добавить</button>
</form>
