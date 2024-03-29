<h2 class="title_add_room center">Подсчет общего количества посадочных мест по зданию:</h2>
<div class="double_items">
    <form class="title form_add">
        <select name="chair">
            <?php
            foreach ($builds as $build) {
                echo '<option value="'.$build->id.'">'.$build->name.'</option>';
            }
            ?>
        </select>
        <button>Выбрать</button>
    </form>
    <div class="build_cont">
        <div>Подсчитанные посадочные места:</div>
        <?php
        $chairs = 0;
        if(!empty($rooms)):
            foreach ($rooms as $room) {
                $chairs += $room->seats;
            }
            echo '<div class="count_square">'.$chairs.' мест'.'</div>';
        endif
        ?>
    </div>
</div>
