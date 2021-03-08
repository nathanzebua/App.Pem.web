<?php
 
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$operator = $_POST['operator'];
$hasil    = $_POST['hasil'];
 
if ($operator == "+")
{
 $hasil = $nilai1 + $nilai2;
 
 }
else if ($operator == "-")
{
 $hasil = $nilai1 - $nilai2;

 }
else if ($operator == "*")
{
 $hasil = $nilai1 * $nilai2;

 }
else if ($operator == "/")
{
 $hasil = $nilai1 / $nilai2;

 }

 ?>


 
  <table width="455" border="1">
    <tr>
      <td width="64">
          nilai1</td>
      <td width="375"><label for="nilai1"></label>
      <?php echo "$nilai1";
 
   ?></td>
    </tr>
    <tr>
      <td>nilai2</td>
      <td><label for="nilai2"></label>
      <?php echo "$nilai2";
   
    ?></td>
    </tr>
    <tr>
      <td>operator</td>
      <td><label for="select"></label>
        <select name="select" id="select2">
      </select></td>
    </tr>
    <tr>
      <td>Hasil</td>
      <td><label for="hasil"></label>
      <?php  echo $nilai1 . "$operator" . $nilai2  ."=".  $hasil;
     
   ?>
           
      </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="button" id="button" value="Hitung" /></td>

    </tr>
  </table>
</form>
</body>
</html>