<?php
function validate($text){
	if($text){
		$isNumber = ctype_digit($text);
		return array(
			'length' => strlen($text),
			'isText' => ($isNumber) ? false : ctype_alnum($text),
			'isNumber' => $isNumber,
			'hasNumber' => (strpbrk($text,'1234567890')) ? true : false,
		);
	}
	return false;
}