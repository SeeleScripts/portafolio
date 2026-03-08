<?php
/**
 * Escapes a string for use in HTML content.
 *
 * This function escapes special characters in a string so that it can be
 * safely embedded in HTML content. It should be used on any user-provided
 * data that is to be shown in an HTML page.
 *
 * @param ?string $text The text to escape. If not provided, an empty string
 *   is returned.
 *
 * @return string The escaped string.
 */

function print_html(?string $text = null): string {
	return htmlspecialchars($text ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Requires a PHP file, but only if it exists.
 *
 * @param string $path The path to the PHP file to require.
 */
function require_existing(string $path) {
	file_exists($path) && (require_once $path);
}
