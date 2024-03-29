<h2 class="title_add_room center">Выбор номеров помещений по зданию</h2>
<div class="double_items">
    <form class="title form_add">
        <select name="numb">
            <?php
            foreach ($builds as $build) {
                echo '<option value="'.$build->id.'">'.$build->name.'</option>';
            }
            ?>
        </select>
        <button>Выбрать</button>
    </form>
    <div class="build_cont">
        <div>Номера помещений:</div>
        <ul>
            <?php
            if(!empty($rooms)):
                foreach ($rooms as $room) {
                    echo '<li>Номер помещения: '.$room->id.'</li>';
                }
            endif
            ?>
        </ul>
    </div>
</div>
