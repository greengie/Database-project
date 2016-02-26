<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
mysql_select_db("animation");
$strSQL = "INSERT INTO showtime ";
$strSQL .="(AID,Date,TimeStart,TimeEnd)";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["AID1"]."','".$_POST["Date1"]."','".$_POST["Timestart1"]."','".$_POST["Timeend1"]."' )";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	//echo "<script>alert('Save successfully!');</script>";
	echo "<script>window.top.window.showResult('1');</script>";
}
else
{
	//echo "<script>alert('Error! Cannot save data');</script>";
	echo "<script>window.top.window.showResult('2');</script>";
}
mysql_close($objConnect);
?>