<project-section>
   <h2 class='yell-voice'><?= $section['heading']; ?></h2>
   <text-content>
    <p class='intro'><?= $section['intro']; ?></p>
 </text-content>
 <?php 
 $class = null;
 foreach ($projectsData as $project) { 
   ?>

   <?php
   include('templates/modules/project-card/template.php');

   
}?>
</project-section>

