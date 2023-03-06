<?php if (isset($_POST['submit'])) {
	$to = "jessemerge2@gmail.com";
	$subject = "Message from Website";
	$message = $_POST['message'];
	$from = $_POST['email'];
	$headers = "From:" . $from;
	mail($to, $subject, $message, $headers);
} ?>

<contact-form id="contact">
	<text-content>
		<h2 class='loud-voice'><?= $section['heading'] ?> </h2>
		<p class="intro"><?= $section['intro'] ?></p>

		<?php
		if (isset($_POST['submit'])) { ?>
			<h5 class='strict-voice'>Your message has been sent.</h5>
		<?php } ?>

	</text-content>

	<form method="POST">
		<form-field>
			<input type="text" placeholder="<?= $section['labelOne'] ?>">
		</form-field>


		<form-field>
			<input name='email' placeholder="<?= $section['labelTwo'] ?>" type=" email">
		</form-field>


		<form-field class='message'>
			<textarea name="message" type="text" placeholder="<?= $section['labelThree'] ?>"></textarea>
		</form-field>


		<button class='action-link' type="submit" name="submit" value="Send Message"><?= $section['button'] ?></button>
	</form>

</contact-form>