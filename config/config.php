<?php

$dir = explode('\\', __DIR__);

$path = array_pop($dir);

$url_path = implode('/', $dir);

//define('ADMIN_ASSET_URL', $url_path.'/public/admin');

$request_uri = $_SERVER['REQUEST_URI'];

$url = explode('/', $request_uri);

$base_url = $_SERVER['HTTP_HOST'];
$protocal = 'http://';

define('ADMIN_ASSET_URL', $protocal.$base_url.'/public/admin/');