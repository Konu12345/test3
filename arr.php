
<html>

<body>
<form>
<table rules="all" style="background:#fff;">
<tr>
<td style="font-size:14px;" >Name</td>
<td style="font-size:14px;">Email</td>
<td style="font-size:14px;">Mobile</td>
<td><span style="font:normal 12px agency, arial; color:blue; text-decoration:underline; cursor:pointer;" onclick="addMoreRows(this.form);">
Add More
</span>
</td>
</tr>
<tr id="rowId">
<td><input name="tb1[]" type="text"  value="" size="17%"/></td>
<td><input name="" type="text"  value="" /></td>
<td><input name="" type="text"  value="" /></td>
</table>
<div id="addedRows"></div>
</td>
</tr>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
var rowCount = 1;
function addMoreRows(frm) {
rowCount ++;
var recRow = '<p id="rowCount'+rowCount+'"><tr><td><input name="tb1[]" type="text" size="17%"  maxlength="120" value="hh'+rowCount+'" /></td><td><input name="" type="text"  maxlength="120" style="margin: 4px 5px 0 5px;"/></td><td><input name="" type="text" maxlength="120" style="margin: 4px 10px 0 0px;"/></td></tr> <a href="javascript:void(0);" onclick="removeRow('+rowCount+');">Delete</a></p>';
jQuery('#addedRows').append(recRow);
}

function removeRow(removeNum) {
jQuery('#rowCount'+removeNum).remove();
}
</script>

<input type="submit" name="sub">




<?php

$con2=mysqli_connect("localhost","root","","savsoftquiz");

if(isset($_REQUEST['sub']))
{
$name=$_REQUEST['tb1'];
 for($i=0;$i<count($name);$i++)
 {
 	
  if($name[$i]!="")
  {
  echo $name[$i];



$inssd=mysqli_query($con2,"INSERT INTO `catd`(`cat`) VALUES ('".$name[$i]."')");
  }





 }

}
 ?>
</form>

</body>
</html>