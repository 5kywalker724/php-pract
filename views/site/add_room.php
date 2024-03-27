<form method="post" class="title form_add">
    <h2 class="title_add_room center">Добавление помещения</h2>
    <h3 class="center"><?= $message ?? ''; ?></h3>
    <input type="text" name="name" placeholder="Название">
    <select name="room_type_id">
        <option selected="selected">Выбор типа комнаты</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <input type="number" min="20" name="room_square" placeholder="Площадь помещения">
    <input type="number" name="seats" placeholder="Количество посадочных мест">
    <button>Добавить</button>
</form>
