<h2><?= $message ?? ''; ?></h2>
<h2 class="title_main center">Вы находитесь на главной странице.
    Для использования конкретного функционала доступного для вашей роли, перейдите по
    одной из доступных ссылок: </h2>
<div class="main_div">
    <ul class="main_ul">
        <li><a href="<?= app()->route->getUrl('/signup') ?>">Добавление сотрудников</a></li>
        <li><a href="<?= app()->route->getUrl('/add_building') ?>">Добавление здания</a></li>
        <li><a href="<?= app()->route->getUrl('/add_room') ?>">Добавление помещения</a></li>
        <li><a href="<?= app()->route->getUrl('/get_name') ?>">Выбор названий помещений по зданию</a></li>
        <li><a href="<?= app()->route->getUrl('/get_number') ?>">Выбор номеров помещений по зданию</a></li>
        <li><a href="<?= app()->route->getUrl('/get_square') ?>">Подсчет общей площади учебных аудиторий по зданию</a></li>
        <li><a href="<?= app()->route->getUrl('/get_seats') ?>">Подсчет общего количества посадочных мест по зданию</a></li>
        <li><a href="<?= app()->route->getUrl('/get_all_seats') ?>">Подсчет общей площади учебных аудиторий по учебному заведению</a></li>
    </ul>
</div>