<?php
	header('Content-type: text/css');
	ob_start('compress');
	function compress($buffer) {
		/* remove comments */
		$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '\r', $buffer);
		/* remove tabs, spaces, newlines, etc. */
		$buffer = str_replace(array('\r\n', '\r', '\n', '\t', '  ', '    ', '    '), '\r', $buffer);
		return $buffer;
	}

	/* your css files */
	include('../theme/css/style.css');
	include('../theme/css/menu.css');

	ob_end_flush();
?>