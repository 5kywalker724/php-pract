<h2 class="title_add_room center">Выбор названий помещений по зданию</h2>
<div class="double_items">
    <form class="title form_add">
        <select name="name">
            <?php
            foreach ($builds as $build) {
                echo '<option value="'.$build->id.'">'.$build->name.'</option>';
            }
            ?>
        </select>
        <button>Выбрать</button>
    </form>
    <div class="build_cont">
        <div>Названия помещений:</div>
        <ul>
            <?php
            if(!empty($rooms)):
                foreach ($rooms as $room) {
                    echo '<li>Название помещения: '.$room->name.'</li>';
                }
            endif
            ?>
        </ul>
    </div>
</div>

