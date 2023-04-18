<support-block>

	<text-content>
		<p>
			<span class='first-words'>PHP is</span> a server-side programming language. The code is executed on the server before being sent to the user's browser.
			Because PHP code runs on the server, it's necessary to reload the web page to see any changes made in response to user input. The examples provided here use PHP to show how user data can be collected and processed, with a bit of JavaScript used to make the page return to its original position after the user submits their data.
		</p>

		<p>
			<span class='first-words'>JavaScript is</span> a client-side programming language that runs directly in the user's web browser. This allows for real-time changes and interactions with the user interface, without requiring a page reload.
			Clicking the Javascript button will disable the buttons on this page, to show that interactions will occur with solely the user's inputs.
		</p>
		<p>
			<span class='first-words'>The Vue</span> button will take you down to check out some Codepen's that use the Vue framework to solve some of these examples.
		</p>

	</text-content>

	<ul class="radio-group">

		<?php foreach ($section['list'] as $thing) { ?>
			<li class="form-control">

				<input class="radio-button" id="<?= strtolower($thing) ?>" type="radio" checked name="<?= strtolower($thing) ?>" />
				<label for="<?= strtolower($thing) ?>"><?= $thing ?></label>
			</li>
		<?php } ?>

	</ul>
</support-block>

<script>
	window.onload = function() {
		phpBox.focus();
	};
</script>