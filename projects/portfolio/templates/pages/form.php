<?php

$json = file_get_contents('data/form.json');
$formData = json_decode($json, true);

?>

<main class="page-content <?= $page ?>">
   <!-- detail page -->
   <section>
      <inner-column>

         <form-box>

            <h2 class="attention-voice"><?= $formThing['title']?></h2>
            <div>
               <?php include("forms/" . $formThing['file-name'] . ".php")?>
            </div>
         </form-box>

      </inner-column>
   </section>

   <section>
      <inner-column>

         <?php include('templates/modules/form-grid/template.php');?>
      </inner-column>
   </section>

</main>
