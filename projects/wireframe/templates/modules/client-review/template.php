<client-block>
    <text-content>
        <h3 class="heading loud-voice"><?= $section['heading'] ?></h3>
        <p class="intro"><?= $section['intro'] ?></p>
    </text-content>

    <section class="scroll-menu">
        <div class="arrow">

            <?php include('images/left-arrow.php'); ?>
        </div>
        <?php foreach ($section['review'] as $review) {
            include('templates/components/client-card/template.php');
        } ?>
        <div class="arrow">

            <?php include('images/right-arrow.php'); ?>
        </div>
    </section>

</client-block>