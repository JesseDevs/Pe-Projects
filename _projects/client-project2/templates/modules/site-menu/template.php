<?php

$menu = file_get_contents("data/menu.json");
$menuData = json_decode($menu, true);

$menuButton = $menuData['button'];
?>

<header class='site-header'>
    <inner-column>
        <nav class="main-menu">
            <ul>
                <?php foreach ($menuData['actions'] as $action) { ?>
                    <li>
                        <a href="<?= $action["link"] ?>" target="_blank" rel=""><span><?= $action["link-name"] ?></span></a>
                    </li>
                <?php } ?>
            </ul>
        </nav>

        <button class='hamburger-button' id='toggle' rel='hamburger'>
            <div class="bar-top"></div>
            <div class="bar-middle"></div>
            <div class="bar-bottom"></div>
        </button>

        <nav class="burger">
            <ul>
                <?php foreach ($menuData['actions'] as $action) { ?>
                    <li>
                        <a href="<?= $action["link"] ?>" target="_blank" rel=""><span><?= $action["link-name"] ?></span></a>
                    </li>
                <?php } ?>
            </ul>
        </nav>

        <a class='header-button' href="<?= $menuButton["link"] ?>" target="_blank" rel="">
            <span><?= $menuButton["link-name"] ?></span>
        </a>


    </inner-column>
</header>