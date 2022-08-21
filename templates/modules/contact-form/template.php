
<contact-form id="contact">
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
     <textarea type="text" placeholder="<?= $section['holderTwo']?>"></textarea> 
   </field>


   <button><?= $section['button']?></button>
 </form>



 

 <div class='fade'>
   <div class="cube-sphere"> 
    <?php include('templates/cube-sphere.php');?>
  </div>
</div>
</contact-form>

