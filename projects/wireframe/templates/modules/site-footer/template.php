<?php
$json = file_get_contents('data/components/footer.json');
$footerData = json_decode($json, true);

?>

<footer>
    <inner-column>

        <navigation-block>
            <nav>
                <ul>
                    <?php foreach ($footerData['list'] as $list) { ?>
                        <li>
                            <ul>
                                <li class='list-header'><?= $list['header'] ?></li>
                                <?php foreach ($list['items'] as $item) { ?>
                                    <li><a href="<?= $item['link'] ?>"><?= $item['detail'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } ?>

                    <li>
                        <?php include('templates/components/subscribe-block/template.php'); ?>
                    </li>

                </ul>
            </nav>

            <nav class='menu'>
                <ul>
                    <li class='logo'>
                        <?php include('images/logo.php'); ?>
                    </li>
                    <li>
                        <ul class='actions'>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Cookies</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class='socials'>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Vine?</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </navigation-block>

    </inner-column>
</footer>