<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Money Management</title>
</head>

<body bgcolor="#FFFF99">
<h2 align="center">View Details</h2>
<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("money") or die(mysql_error());
if(mysql_error())
{
echo "Failed to connect".mysql_error();
}
$sql = "SELECT * FROM manag";
?>
<table width="100%" height="86" style="font-weight:bold; border-radius:5px; border:solid 1px #000000">
<tr>
<td colspan="4" align="center"><b>Money Management</b></td></tr>
<tr align="center" >
<td width="25%" style="font-weight:bold; border-radius:5px; border:solid 1px #000000">Date</td>
<td width="25%" style="font-weight:bold; border-radius:5px; border:solid 1px #000000">Item</td>
<td width="25%" style="font-weight:bold; border-radius:5px; border:solid 1px #000000">Rahul</td>
<td width="25%" style="font-weight:bold; border-radius:5px; border:solid 1px #000000">Saumil</td>
</tr>
<tr align="center">
<td style="font-weight:bold; border-radius:5px; border:solid 1px #000000">
<?php
$rs =mysql_query($sql);
while($row=mysql_fetch_array($rs)){
echo $row['Date']."<br>"."<hr>";
}
?></td>
<td style="font-weight:bold; border-radius:5px; border:solid 1px #000000">
<?php
$rs =mysql_query($sql);
while($row=mysql_fetch_array($rs)){
echo $row['Item']."<br>"."<hr>";
}
?></td>
<td style="font-weight:bold; border-radius:5px; border:solid 1px #000000">
<?php
$rs =mysql_query($sql);
while($row=mysql_fetch_array($rs)){
echo $row['Siddharth']."<br>"."<hr>";
}
?></td>
<td style="font-weight:bold; border-radius:5px; border:solid 1px #000000">
<?php
$rs =mysql_query($sql);
while($row=mysql_fetch_array($rs)){
echo $row['Subodh']."<br>"."<hr>";
}
?></td>
</tr>
<tr >
<td colspan="2" align="right">Total</td>
<td style="font-weight:bold; border-radius:5px; border:solid 1px #000000" align="center">
<?php
$sum=0;
$rs =mysql_query($sql);
while($row=mysql_fetch_array($rs)){
$sum =$sum+$row['Siddharth'];
}
echo "Rs ". $sum;
?>
<td style="font-weight:bold; border-radius:5px; border:solid 1px #000000" align="center">
<?php
$sum=0;
$rs =mysql_query($sql);
while($row=mysql_fetch_array($rs)){
$sum =$sum+$row['Subodh'];
}
echo "Rs ". $sum;
?>
</td>
</tr>
<tr >
<td colspan="2" align="right" >Differance</td>
<td colspan="2" style="font-weight:bold; border-radius:5px; border:solid 1px #000000" align="center">
<?
$dif=0;
$rs =mysql_query($sql);
while($row=mysql_fetch_array($rs)){
$dif =$dif+$row['Subodh']-$row['Siddharth'];
}
if($dif<0)
{
$dif =-($dif);
echo "Rahul extra expenditure is Rs"." ".$dif;
}
else{
echo "Saumil extra expenditure is Rs"." ".$dif;
}
?>
</td>
</tr>
<tr>
<td colspan="2" align="right">Balance Due</td>
<td colspan="2" style="font-weight:bold; border-radius:5px; border:solid 1px #000000" align="center">
<?
$bal=0;$dif=0;
$rs =mysql_query($sql);
while($row=mysql_fetch_array($rs)){
$dif =$dif+$row['Subodh']-$row['Siddharth'];
$bal=$dif/2;
}
echo "Rs. ". $bal;
mysql_close();
?>
</td>
</tr>
</table>
<table width="460" align="center">
<tr><td width="224"><b>To Add details click Here</b></td>
<td width="224"><b>To Update Details Click Here</b></td>
</tr>
<tr align="center">
<td width="224"><button type="button" style="border-radius:5px;"><a href="base.php" style="text-decoration:none; color:#FF0000"><b>ADD</b></a></button></td>
<td><button type="button" style="border-radius:5px;"><a href="update.php" style="text-decoration:none; color:#FF0000"><b>UPDATE</b></a></button></td>
</tr>
</table>
</body>
</html>
