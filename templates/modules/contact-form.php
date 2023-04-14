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

		<?php
		if (isset($_POST['submit'])) { ?>
			<p class='strict-voice'>Your message has been sent.</p>

		<?php } ?>
	</text-content>

	<form method="POST" class='support-grid'>
		<big-field>
			<form-field>
				<input type="text" placeholder="<?= $section['labelOne'] ?>">
			</form-field>
			<form-field>
				<input name='email' placeholder="<?= $section['labelTwo'] ?>" type="email">
			</form-field>
		</big-field>


		<form-field class='message'>
			<textarea name="message" placeholder="<?= $section['labelThree'] ?>"></textarea>
		</form-field>


		<button class='action-link' type="submit" name="submit" value="Send Message"><?= $section['button'] ?></button>
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