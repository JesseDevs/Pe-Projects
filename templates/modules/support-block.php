<support-block>

	<text-content>
		<?php foreach ($section['text'] as $t) { ?>
			<p>
				<?= $t ?>
			</p>
		<?php } ?>


	</text-content>

	<?php if (isset($section['radio'])) { ?>
		<ul class="radiogroup">

			<?php foreach ($section['list'] as $thing) { ?>
				<li class="form-control">

					<input class="radio-button" id="<?= strtolower($thing) ?>" type="radio" checked name="<?= strtolower($thing) ?>" />
					<label for="<?= strtolower($thing) ?>"><?= $thing ?></label>
				</li>
			<?php } ?>

		</ul>

	<?php } ?>
</support-block>

<script>
	window.onload = function() {
		phpBox.focus();
	};
</script>