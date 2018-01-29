<?php
/**
*	method for sanitizing input into the database
*/
function escape($string) {
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
}