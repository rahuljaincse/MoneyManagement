<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#FFFF99">
<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("money") or die(mysql_error());
if(mysql_error())
{
echo "Failed to connect".mysql_error();
}
$sql="UPDATE manag SET Subodh='$_POST[sbdh]' , Siddharth='$_POST[sid]' WHERE DATE='$_POST[date]'";
mysql_query($sql);
echo "The database is updated";
mysql_close();
?>
<table align="center">
<tr><td width="205"><b>To Add Details Click Here</b></td>
<td width="205"><b>To Update Details Click Here</b></td>
<td width="197"><b>To View Details Click Here</b></td>
</tr>
<tr align="center">
<td><button type="button" style="border-radius:5px;"><a href="base.php" style="text-decoration:none; color:#FF0000"><b>ADD</b></a></button></td>
<td><button type="button" style="border-radius:5px;"><a href="update.php" style="text-decoration:none; color:#FF0000"><b>UPDATE</b></a></button></td>
<td width="42"><button type="button" style="border-radius:5px;"><a href="view.php" style="text-decoration:none; color:#FF0000"><b>VIEW</b></a></button></td>
</tr>
</table>
</body>
</html>
