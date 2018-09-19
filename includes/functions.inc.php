<?php

/* This function will check for HTML special characters
* and change them to their HTML entity codes.
*/

function html ($text)
{
	return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
?>