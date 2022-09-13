<?php
$json = file_get_contents('data/components/footer.json');
$footerData = json_decode($json, true);

?>

<footer>
    <inner-column>

        <navigation-block>
            <nav class='resources'>

                <?php foreach ($footerData['lists'] as $list) { ?>

                    <ul>
                        <li class='small-voice list-header'><?= $list['header'] ?></li>
                        <?php foreach ($list['items'] as $item) { ?>
                            <li><a class='small-voice' href="<?= $item['link'] ?>"><?= $item['detail'] ?></a></li>
                        <?php } ?>
                    </ul>

                <?php } ?>


                <?php include('templates/components/subscribe-block/template.php'); ?>



            </nav>

            <nav class='menu'>

                <div class='logo'>
                    <?php include('images/logo.php'); ?>
                </div>

                <ul class='actions'>
                    <?php foreach ($footerData['pages'] as $pageLinks) { ?>
                        <li><a href="<?= $pageLinks['link'] ?>"><?= $pageLinks['title'] ?> </a></li>

                    <?php } ?>

                </ul>


                <ul class='socials'>
                    <?php foreach ($footerData['socials'] as $socialLinks) { ?>
                        <li>
                            <a href="<?= $socialLinks['link'] ?>">
                                <?php include("images/social-svg/" . $socialLinks['title'] . ".php"); ?>
                            </a>
                        </li>

                    <?php } ?>
                </ul>


            </nav>
        </navigation-block>

    </inner-column>
</footer>