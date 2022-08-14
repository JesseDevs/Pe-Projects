
<contact-form>
  <h2 class='yell-voice'><?= $section['heading']?> </h2>
  <p class="intro"><?= $section['intro']?></p>


  <form>   
    <field>    
     <label for=""><?= $section['labelOne']?></label>
     <input type="text" placeholder="<?= $section['holderOne']?>">
   </field>


   <field>    
     <label for=""><?= $section['labelTwo']?></label>
     <input type="email">
   </field>


   <field class='message'>    
     <label for=""><?= $section['labelThree']?></label>
     <input type="text" placeholder="<?= $section['holderTwo']?>">
   </field>


   <button><?= $section['button']?></button>
 </form>
</contact-form>

