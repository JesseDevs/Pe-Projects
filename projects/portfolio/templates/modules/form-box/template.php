<form-box>

   <text-content>
      <h2 class="attention-voice"><?= ucfirst($formThing['title'])?></h2>
      <p class="intro"><?= $formThing['intro']?></p>
   </text-content>

   <?php include("forms/" . $formThing['file-name'] . ".php")?>
</form-box>
