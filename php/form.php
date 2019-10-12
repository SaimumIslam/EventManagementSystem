<script>
/*
This script is identical to the above JavaScript function.
*/
var ct = 1;
function new_link()
{
	ct++;
	var div1 = document.createElement('div');
	div1.id = ct;
	// link to delete extended form elements
	var delLink = '<div style="text-align:right;margin-right:20px;"><a href="javascript:delIt('+ ct +')">Delete</a></div>';
	div1.innerHTML = document.getElementById('newlinktpl').innerHTML + delLink;
	document.getElementById('newlink').appendChild(div1);
}
// function to delete the newly added set of elements
function delIt(eleId)
{
	d = document;
	var ele = d.getElementById(eleId);
	var parentEle = d.getElementById('newlink');
	parentEle.removeChild(ele);
}
</script>
<style>
   #newlink {width:600px}
</style>
<form method="post" action="">
<div id="newlink">
<div>
<table border=0>
	<tr>
		<td> <input type="text" name="linkurl[]" value="" placeholder="Enter Programe Name"> </td>
		<td>  <input type="text" name="linkdesc[]" placeholder="Enter Fees" ></input> </td>
		<td>  <input type="time" name="linkTime[]" placeholder="Enter Time"></input> </td>
		<td>  <input type="text" name="linkPl[]" placeholder="Enter Place"></input> </td>		
	</tr>
</table>
</div>
</div>
		<div id="addnew">
	<a href="javascript:new_link()">Add New </a>
	</div>	
	<br>
		<input type="submit" name="submit1">
		<input type="reset" name="reset1">
</form>
<!-- Template -->
<div id="newlinktpl" style="display:none">
<div>
<table style="width: 100%; position: relative;" border=0 >
	<tr>
		<td> <input type="text" name="linkurl[]" value="" placeholder="Enter Programe Name"> </td>
		<td>  <input type="text" name="linkdesc[]" placeholder="Enter Fees" ></input> </td>
		<td>  <input type="time" name="linkTime[]" placeholder="Enter Time"></input> </td>
		<td>  <input type="text" name="linkPl[]" placeholder="Enter Place"></input> </td>
	</tr>
</table>
</div>
</div>
<?php
if(count($_POST))
{
	$len = count($_POST['linkurl']);
	for ($i=0; $i < $len; $i++)
	{
		echo $_POST['linkurl'][$i] . '<br>';
		echo $_POST['linkdesc'][$i] . '<br>';
	}
}
?>