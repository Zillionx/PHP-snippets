<?php // check ports
$host = ''; // set host or IP address
$ports['FTP'] = '21';
$ports['SSH'] = '22';
$ports['SMTP'] = '25';
$ports['APACHE'] = '80';
$ports['POP3'] = '110';
$ports['SASL 587'] = '587';
$ports['MYSQL'] = '3306';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>check-ports</title>
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: 500;
	color: #FFFFFF;
}
.up {
	background-color: #00CC33;
	padding-right: 3px;
	padding-left: 3px;
}
.down {
	background-color: #FF0033;
	padding-right: 3px;
	padding-left: 3px;
}
</style>
</head>

<body>
<?PHP
foreach ( $ports as $key => $value) {
$fp= fsockopen($host, $value);
if(!$fp) {
   echo"<span class='down'>$key</span> ";
} else {
   echo"<span class='up'>$key</span> ";
}}
?>
</body>
</html>
