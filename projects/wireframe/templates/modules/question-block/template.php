<question-block>

    <text-content>
        <h3 class="loud-voice"><?= $section['heading'] ?></h3>

        <p class='intro'> <?= $section["intro"] ?></p>

    </text-content>

    <div class="details-box">
        <?php foreach ($section['details'] as $detail) {
            $open = '';
            if ($detail['open']) {
                $open = 'open';
            }

        ?>

            <details <?= $open ?>>
                <summary class='calm-voice'><?= $detail['header'] ?></summary>
                <p><?= $detail['text'] ?></p>
            </details>

        <?php } ?>
    </div>
</question-block>