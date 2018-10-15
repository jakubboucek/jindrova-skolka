<?php
function validate($text){
	if($text){
		$isNumber = ctype_digit($text);
		return array(
			'length' => strlen($text),
			'isText' => ($isNumber) ? false : (ctype_alnum($text) || (strpbrk($text,'.'))) ? true : false,
			'isNumber' => $isNumber,
			'isEmail' => (filter_var($text, FILTER_VALIDATE_EMAIL)) ? true : false,
			'hasNumber' => (strpbrk($text,'1234567890')) ? true : false,
		);
	}
	return false;
}