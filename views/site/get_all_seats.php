<h2 class="title_add_room center">Подсчет общей площади учебных аудиторий по учебному заведению:</h2>
<div class="one_item">
    <div class="build_cont_seats">
        <div>Подсчитанная площадь аудиторий:</div>
        <?php
        $square = 0;
        if(!empty($rooms)):
            foreach ($rooms as $room){
                $square += $room->room_square;
            }
            echo '<div class="count_square">'.$square.' м^2'.'</div>';
        endif
        ?>
    </div>
</div>
