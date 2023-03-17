<?php

$salt = "";

if (isset($_REQUEST["u"]) && isset($_REQUEST["k"]) && md5($_REQUEST["u"] . $salt) == $_REQUEST["k"]) {
	$file_info = new finfo(FILEINFO_MIME_TYPE);
	$res = file_get_contents($_REQUEST["u"]);
	$mime_type = $file_info->buffer($res);
	header('Content-type: '.$mime_type);
	echo $res;
}