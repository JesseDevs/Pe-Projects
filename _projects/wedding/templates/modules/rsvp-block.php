<rsvp-block>

	<h2 class='yell-voice pro'>
		<?= $section['heading'] ?>
	</h2>

	<form method="POST">
		<big-field>
			<form-field>
				<label for="first" class="required">First Name:</label>
				<input type="text" required placeholder="">
			</form-field>

			<form-field>
				<label for="last" class="required">Last Name:</label>
				<input type="text" required placeholder="">
			</form-field>
		</big-field>

		<form-field>
			<label for="email" class="required">Email:</label>
			<input name='email' required placeholder="" type="email">
		</form-field>

		<form-field>
			<label for="last" class="required">Party size:</label>
			<input type="text" required placeholder="Total. Including yourself.">
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