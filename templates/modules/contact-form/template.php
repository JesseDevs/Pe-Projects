<?php if (isset($_POST['submit'])) {
  $to = "jessemerge2@gmail.com";
  $subject = "Message from Website";
  $message = $_POST['message'];
  $from = $_POST['email'];
  $headers = "From:" . $from;
  mail($to, $subject, $message, $headers);
  echo "Your message has been sent.";
} ?>

<contact-form id="contact">
  <h2 class='yell-voice'><?= $section['heading'] ?> </h2>
  <p class="intro"><?= $section['intro'] ?></p>


  <form method="POST">
    <field>
      <label for=""><?= $section['labelOne'] ?></label>
      <input type="text" placeholder="<?= $section['holderOne'] ?>">
    </field>


    <field>
      <label for=""><?= $section['labelTwo'] ?></label>
      <input name='email' type="email">
    </field>


    <field class='message'>
      <label for=""><?= $section['labelThree'] ?></label>
      <textarea name="message" type="text" placeholder="<?= $section['holderTwo'] ?>"></textarea>
    </field>


    <button type="submit" name="submit" value="Send Message"><?= $section['button'] ?></button>
  </form>





  <div class='fade'>
    <div class="cube-sphere">
      <?php include('templates/cube-sphere.php'); ?>
    </div>
  </div>
</contact-form>