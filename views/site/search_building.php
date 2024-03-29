<h2 class="title_add_room center">Поиск здания</h2>
<div class="double_items">
    <form class="title form_add">
        <input type="search" name="search" placeholder="Название здания">
        <button>Поиск</button>
    </form>
    <div class="build_cont">
        <div>Найденное здание:</div>
        <ul>
            <?php
            if(!empty($builds)):
                foreach ($builds as $build) {
                    echo '<li>Название здания: '.$build->name.'</li>';
                    echo '<li>Адрес здания: '.$build->address.'</li>';
                    if(!empty($build->image)):
                        echo '<li><img class="img" src="public/img/'.$build->image.'"></li>';
                    endif;
                }
            endif
            ?>
        </ul>
    </div>
</div>
