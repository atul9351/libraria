<?php

function notification($type,$message = 'Dafault Message',$timer = false, $array = [] ){
	$swal = array(
		'icon' => $type,
		'html' => $message,
		'title' => ucfirst($type),
		'keydownListenerCapture' => true,
		'timer' => $timer
	);
	return array_merge($swal,$array);
}