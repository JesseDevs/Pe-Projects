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
                        <li class='list-header'><?= $list['header'] ?></li>
                        <?php foreach ($list['items'] as $item) { ?>
                            <li><a href="<?= $item['link'] ?>"><?= $item['detail'] ?></a></li>
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
                    <li><a href="?page=template-one">One</a></li>
                    <li><a href="?page=template-two">Two</a></li>
                    <li><a href="?page=template-three">Three</a></li>

                </ul>


                <ul class='socials'>
                    <li><a href="https://www.linkedin.com/feed/"><?php include('images/social-svg/linkedin.php'); ?></a></li>
                    <li><a href="https://www.facebook.com/"><?php include('images/social-svg/facebook.php'); ?></a></li>
                    <li><a href="https://twitter.com/home"><?php include('images/social-svg/luicide.php'); ?></a></li>
                </ul>


            </nav>
        </navigation-block>

    </inner-column>
</footer>