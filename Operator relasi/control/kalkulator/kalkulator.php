<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="proses.php">
  <table width="455" border="1">
    <tr>
      <td width="64">
          nilai1</td>
      <td width="375"><label for="nilai1"></label>
      <input type="text" name="nilai1" id="nilai1" /></td>
    </tr>
    <tr>
      <td>nilai2</td>
      <td><label for="nilai2"></label>
      <input type="text" name="nilai2" id="nilai2" /></td>
    </tr>
    <tr>
      <td>operator</td>
      <td><label for="select"></label>
        <select name="operator" id="operator">
          <option>+</option>
          <option>-</option>
          <option>*</option>
          <option>/</option>
      </select></td>
    </tr>
    <tr>
      <td>Hasil</td>
      <td><label for="hasil"></label>
       <input type="text" name="hasil" id="hasil" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="button" id="button" value="Hitung" /></td>
    </tr>
  </table>
</form>
</body>
</html>