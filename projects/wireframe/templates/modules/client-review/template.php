<client-block>
    <text-content>
        <h3 class="heading loud-voice"><?= $section['heading'] ?></h3>
        <p class="intro"><?= $section['intro'] ?></p>
    </text-content>

    <div class="scroll-menu">
        <?php foreach ($section['review'] as $review) {
            include('templates/components/client-card/template.php');
        } ?>
    </div>

</client-block>