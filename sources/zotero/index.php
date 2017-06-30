<?php

require '../settings.php';

chdir ("../inc");

require 'include.php';
require_once "HTTP/WebDAV/Server/Filesystem.php";
$server = new HTTP_WebDAV_Server_Filesystem();

$server->ServeRequest( dirname( dirname(__FILE__) . '/' . $data_dir ) );

?>
