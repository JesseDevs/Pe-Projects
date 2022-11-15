<?php

$menu = file_get_contents("data/menu.json");
$menuData = json_decode($menu, true);

?>

<header class='site-header'>
    <inner-column>
        <nav>
            <ul>
                <?php foreach ($menuData['actions'] as $action) { ?>
                    <li>
                        <a href="<?= $action["link"] ?>" target="_blank" rel=""><span><?= $action["link-name"] ?></span></a>
                    </li>
                <?php } ?>
            </ul>
        </nav>

        <?php $menuButton = $menuData['button']; ?>
        <a class='header-button' href="<?= $menuButton["link"] ?>" target="_blank" rel="">
            <span><?= $menuButton["link-name"] ?></span></a>


    </inner-column>
</header>