

<resume-card>

    <?php if ($type == 'job') { ?>
        <p class='company'><?= $item['company'] ?> &#183; <?= $item['role'] ?></p>



    <?php } else {?>
       <p class='company'><?= $item['school'] ?> &#183; <?= $item['major'] ?></p>

   <?php } ?>


   <p class='date'><?= $item['startDate'] ?> &#8212; <?= $item['endDate'] ?></p>

   <p><?= $item['takeaways'] ?></p>

   <ul class='duties'>
    <?php foreach ($item['duties'] as $duty) { ?>
        <li><?= $duty ?></li>
    <?php } ?>
</ul>


<text-content class="skills ">
    <?php foreach ($item['skills'] as $skill){ ?>
        <p class="small-voice"><?= $skill ?></p>
    <?php } ?>
</text-content>

<!-- <p><?= $item['specialNote'] ?></p> -->

</resume-card>



