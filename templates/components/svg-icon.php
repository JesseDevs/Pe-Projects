<?php
function render_svg_icon($icon)
{
	return '<div class="contains-svg"><svg class="' . $icon . '"><use xlink:href="#icon-' . $icon . '"></use></svg></div>';
}
