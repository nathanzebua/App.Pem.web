<html><head><title>STATEMENT IF</title></head><body>

<?php error_reporting(0);
echo"<form action=\"$php_self\" method=\"post\">";
$nilai=$_POST['nilai1'];
echo "Berapa nilai PHPmu?:
<input name=\"nilai1\" value=\"$nilai1\" size=\"3\" type=\"text\" value=\"$nilai1\">
<input name=\"cek\" type=\"submit\" value=\"Cek\"> </form>";
if($_POST['cek'])
	{echo"<br><h1>";
	if($nilai=="")
		{echo"Anda Belum Menentukan Nilai..!";}
	elseif(!is_numeric($nilai))
		{echo"Ini Bukan Nilai Angka";}
	else
		{
			if($nilai<=30)
				{echo "Anda mendapat nilai huruf <b> E </>";}
			elseif($nilai<=50)
				{echo "Anda mendapat nilai huruf <b> D </>";}
			elseif($nilai<=70)
				{echo "Anda mendapat nilai huruf <b> C </>";}
			elseif($nilai<=85)
				{echo"Anda mendapat nilai huruf <b> AB </>";}
			else
				{echo"Anda mendapat nilai huruf <b> A </>";}
		}
	echo"</h1>";
}
?>

</body>
</html>