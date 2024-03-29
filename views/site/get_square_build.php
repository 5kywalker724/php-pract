<h2 class="title_add_room center">Подсчет общей площади учебных аудиторий по зданию:</h2>
<div class="double_items">
    <form class="title form_add">
        <select name="square">
            <?php
            foreach ($builds as $build) {
                echo '<option value="'.$build->id.'">'.$build->name.'</option>';
            }
            ?>
        </select>
        <button>Выбрать</button>
    </form>
    <div class="build_cont">
        <div>Подсчитанная площадь УА:</div>
        <?php
        $squares = 0;
        if(!empty($rooms)):
            foreach ($rooms as $room) {
                $squares += $room->room_square;
            }
            echo '<div class="count_square">'.$squares.' м^2'.'</div>';
        endif
        ?>
    </div>
</div>
