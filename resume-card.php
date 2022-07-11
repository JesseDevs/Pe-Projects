<?php if ($type == 'job') { ?>

    <article class='resume-card'>
        <p class='company'><?= $item['company'] ?> &#183; <?= $item['role'] ?></p>

        <p class='date'><?= $item['startDate'] ?> &#8212; <?= $item['endDate'] ?></p>

        <p><?= $item['takeaways'] ?></p>

        <ul class='duties'>
            <?php foreach ($item['duties'] as $duty) { ?>
                <li><?= $duty ?></li>
            <?php } ?>
        </ul>

        <ul class='skills'>
            <?php foreach ($item['skills'] as $skill) { ?>
                <li><?= $skill ?></li>
            <?php } ?>
        </ul>

        <p><?= $item['specialNote'] ?></p>
    </article>

<?php } ?>

<?php if ($type == 'education') { ?>

    <article class='resume-card'>
        <p class='company'><?= $item['school'] ?> &#183; <?= $item['major'] ?></p>

        <p class='date'><?= $item['startDate'] ?> &#8212; <?= $item['endDate'] ?></p>

        <p><?= $item['takeaways'] ?></p>

        <ul class='duties'>
            <?php foreach ($item['duties'] as $duty) { ?>
                <li><?= $duty ?></li>
            <?php } ?>
        </ul>

        <ul class='skills'>
            <?php foreach ($item['skills'] as $skill) { ?>
                <li><?= $skill ?></li>
            <?php } ?>
        </ul>

        <p><?= $item['specialNote'] ?></p>
    </article>

<?php } ?>