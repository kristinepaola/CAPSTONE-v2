<?php
$sDbHost = 'localhost';
$sDbName = 'MCN';
$sDbUser = 'root';
$sDbPwd = '';
$Conn = mysql_connect ($sDbHost, $sDbUser, $sDbPwd);
mysql_select_db($sDbName, $Conn);


?>