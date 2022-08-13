<?php require('data.php') ?>

<main class="goals">
    <inner-column>

        <div class="info-wrapper">
            <h2 class="attention-voice">Goals</h2>

            <span>What&#39;s next for me? Looking forward.</span>

            <article-grid>


                <?php
                foreach ($goals as $goal) {
                ?>

                    <article>
                        <h3 class="calm-voice">By the end of the <?= $goal['title'] ?></h3>
                        <ul>
                            <li><?= $goal['one'] ?></li>
                            <li><?= $goal['two'] ?></li>
                            <li><?= $goal['three'] ?></li>

                            <?php if (isset($goal['four'])) {             ?>

                                <li><?= $goal['four'] ?></li>
                            <?php } ?>

                            <?php if (isset($goal['five'])) {             ?>

                                <li><?= $goal['five'] ?></li>
                            <?php } ?>
                        </ul>
                    </article>

                <?php } ?>

            </article-grid>

        </div>

    </inner-column>
</main>