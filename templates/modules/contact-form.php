<?php if (isset($_POST['submit'])) {
	$to = "jessemerge2@gmail.com";
	$subject = "Message from Website";
	$message = $_POST['message'];
	$from = $_POST['email'];
	$headers = "From:" . $from;
	mail($to, $subject, $message, $headers);
} ?>

<contact-form id="contact" class='grid-template'>
	<text-content>
		<h2 class='loud-voice'><?= $section['heading'] ?> </h2>
		<p class="intro"><?= $section['intro'] ?></p>

	</text-content>

	<?php
	if (isset($_POST['submit'])) { ?>
		<p class='strict-voice contact-confirm'>Thank you for sharing a message. <br>I'll get back to you as soon as I can.</p>
	<?php } ?>

	<form method="POST" class='support-grid' action="https://formsubmit.co/c6ffeb78cb26f6942f459f9ace6b60d7">
		<big-field>
			<form-field>
				<input type="text" placeholder="<?= $section['labelOne'] ?>">
			</form-field>
			<form-field>
				<input name='email' id='email' placeholder="<?= $section['labelTwo'] ?>" type="email">
			</form-field>
		</big-field>


		<form-field class='message'>
			<textarea name="message" placeholder="<?= $section['labelThree'] ?>"></textarea>
		</form-field>


		<button class='action-link' id='contact-submit' type="submit" name="submit"><?= $section['button'] ?></button>
	</form>

	<div class="cube-sphere-container">
		<div class="spiral-cubes">
			<?php for ($i = 0; $i < 7; $i++) { ?>
				<div class="box-container">
					<div class="cube">
						<div class="face top"></div>
						<div class="face bottom"></div>
						<div class="face left"></div>
						<div class="face right"></div>
						<div class="face front"></div>
						<div class="face back"></div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

</contact-form>