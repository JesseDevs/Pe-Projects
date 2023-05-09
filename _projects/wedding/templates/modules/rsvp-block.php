<?php if (isset($_POST['submit'])) {

	$attending = '';
	$selectedOption = $_POST['form-select'];

	switch ($selectedOption) {
		case 'yes':
			$attending = "Yes, I'll be there.";
			break;
		case 'no':
			$attending = "No, I won't be going.";
		case 'unsure':
			$attending = "I'm not sure yet, give me some time.";
	}


	$to = "jessemerge2+wedding@gmail.com";
	$message = $attending . "\r\n" . $_POST['message'];
	$from = $_POST['email'];
	$fName = $_POST['first'];
	$lName = $_POST['last'];
	$size = $_POST['size'];

	$subject = $fName . " " . $lName . " - RSVP: Party of " . $size;
	$headers = "From:" . $from;
	mail($to, $subject, $message, $headers);
} ?>

<rsvp-block id='rsvp'>

	<h2 class='yell-voice pro'>
		<?= $section['heading'] ?>
	</h2>

	<form method="POST">
		<form-field>
			<label for="select" class="required">Will you be attending?</label>
			<select name="form-select" id="form-select" class='form-select'>

				<option value="yes">Yes</option>
				<option value="no">No</option>
				<option value="unsure">Not Sure</option>

			</select>
		</form-field>

		<big-field>
			<form-field>
				<label for="first" class="required">First Name:</label>
				<input name='first' type="text" required placeholder='-'>
			</form-field>

			<form-field>
				<label for="last" class="required">Last Name:</label>
				<input name='last' type="text" required placeholder="-">
			</form-field>
		</big-field>

		<form-field>
			<label for="email" class="required">Email:</label>
			<input name='email' required placeholder="-" type="email">
		</form-field>

		<form-field>
			<label for="size" class="required">Party size:</label>
			<input name='size' type="text" required placeholder="Total. Including yourself.">
		</form-field>

		<form-field class='message'>
			<label for="message">Let us know of any questions or concerns!</label>
			<textarea name="message" placeholder="Time of arrival?"></textarea>
		</form-field>


		<div class="button-container">
			<button class='submit-link' type="submit" name="submit" value="Send Message">
				SEND
			</button>
		</div>
	</form>

</rsvp-block>