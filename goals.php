<?php include('header.php') ?>

<?php

$goals = [
    'week' => [
        'title' => 'week...',
        'one' => 'Continue practicing PHP and testing my current skills.',
        'two' => 'Write more blog post starting with one about PHP introduction.',
        'three' => 'Start making graphics.',
        'four' => 'Keep an eye on my portfolio page and search for external feedback.',
        'five' => 'Meet with Derek as much as possible.',
    ],
    'month' => [
        'title' => 'month...',
        'one' => 'Practice some creativity and using a graphic design program by creating an image every day of the month.',
        'two' => 'Be able to use PHP comfortably in most scenarios.',
        'three' => 'Develop current projects for display on portfolio.',
        'four' => 'Plan some meditation to avoid burnout.',

    ],
    'course' => [
        'title' => 'course...',
        'one' => 'I want to get an entry level job as a software engineer and or designer.',
        'two' => "I would love to make above 100k and be able to say I'm happy in my place of employment. The size of the company is still in question. I see benefits in all scenarios but I belive somewhere to get my feet wet and build a foundation may be best for the long run of my career.",
        'three' => "Be able to say I've learned so much and establish a valuble connection with everyone in the course.",
        'four' => 'Continue to learn new skills. 3D graphics? Game Design? More interactive graphics?',

    ],
    'fiveYear' => [
        'title' => '5 years...',
        'one' => "I'm allowed to be selfish! I want to be in a position that earns well over 200k plus compensation. Be able to work remote with flexiblity and a balance when it comes to work and personal ventures/ adventures. I love Los Angeles, but an opportunity to build a career and be able to do it from anywhere seems like a dream.",
        'two' => 'Develop all sorts of connections with people of all backgrounds.',
        'three' => 'Create amazing things that push all the limits.',

    ],

];
?>

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

</div>
</body>

</html>