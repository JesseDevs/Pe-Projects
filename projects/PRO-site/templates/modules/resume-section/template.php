<resume-section>

    <h3 class='attention-voice'><?= $section['heading']; ?></h3>

    <text-content>
       <p class='intro'><?= $section['intro']; ?></p>
   </text-content>

   <?php renderList($resumeData, "job"); ?>

   <?php renderList($resumeData, "education"); ?>


</resume-card>
