<?PHP // 2013 Zilli custom - pass-redir
if (isset($_POST['pass'])){
$pass01 = "genova";
$pass02 = "milano";
$pass03 = "firenze";
if ($_POST['pass'] == "$pass01"){
	header ("location:http://genova"); 
} elseif ($_POST['pass'] == "$pass02"){
	header ("location:http://milano"); 
} elseif ($_POST['pass'] == "$pass03"){	
	header ("location:http://firenze");
} else {
	echo "pass non valida - <a href='javascript:history.back();'>RIPROVA</a><hr>";
}}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>pass-redir</title>
</head>

<body>
<form action="<?PHP echo $_SERVER['PHP_SELf'] ?>" method="post">
  <input name="pass" type="text" />
  <br />
  <br />
  <input name="invia" type="submit" value="Submit" />
</form>
</body>
</html>