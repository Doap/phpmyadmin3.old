<?php
$i = 1;
//$cfg['Servers'][$i]['host'] = 'localhost'; // MySQL hostname
$cfg['Servers'][$i]['host'] = '127.0.0.1'; // MySQL hostname
$cfg['Servers'][$i]['port'] = '3306'; // MySQL port
$cfg['Servers'][$i]['user'] = 'dave'; // MySQL user
//$cfg['Servers'][$i]['password'] = 'fr1ck0ff'; // MySQL password 
$cfg['Servers'][$i]['extension'] = 'mysql';
$cfg['Servers'][$i]['connect_type']= 'tcp';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['LoginCookieValidity'] = 3600 * 9; // 9 hours
$cfg['Servers'][$i]['AllowNoPassword'] = TRUE;
?>
