<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
function giai_pt_bac_1($a,$b)
{
	if ($a==0)
	{
		if ($b==0)
			$nghiem ="Phương trình có vô số nghiệm";
		if ($b<>0)
			$nghiem ="Phương trình vô nghiệm";
		}
	else 
	{
		$nghiem = 'x='.round(-($b/$a),2);
	}
	return $nghiem;
}

function giai_pt_bac_2($a,$b,$c)
{
	if ($a==0)
		$nghiem=giai_pt_bac_1($b,$c);
	if ($a<>0)
	{
		$delta = pow($b,2)-4*$a*$c;
		if ($delta < 0)
			$nghiem="Phương trình vô nghiệm";
		if ($delta==0)
		{
			$nghiem="Phương trình có nghiệm kép x1=x2=".round(-($b/2*$a),2);
		}
		else 
		{
			$can=sqrt($delta);
			$x1=(-$b+$can)/(2*$a);
			$x2=(-$b-$can)/(2*$a);
			$nghiem='Phương trình có 2 nghiệm phân biệt x1='.$x1.',x2='.$x2;
		}
	}
	return $nghiem;
}
if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]))
{
	$nghiem=giai_pt_bac_2($_POST["a"],$_POST["b"],$_POST["c"]);
}

?>


<form action="giai_pt_bac_2.php" method="post" >
<table width="806" border="1">
<tr>
<td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
</tr>
<tr>
<td width="83">Phương trình </td>
<td width="236">
<input name="a" type="text" value="<?php if(isset($_POST["a"])) echo $_POST["a"]?> "/>
    X^2 + </td>
<td width="218"><label for="textfield3"></label>
<input type="text" name="b" id="textfield3" value=" <?php if(isset($_POST["b"])) echo $_POST["b"]?>" />
      X+</td>
<td width="241"><label for="textfield"></label>
<input type="text" name="c" id="textfield" value="<?php if(isset($_POST["c"])) echo $_POST["c"]?>" />
      =0</td>
</tr>
<tr>
<td colspan="4">
  Nghiệm  
<label for="textfield2"></label>
<input name="textfield" type="text" id="textfield2" width="400" value="<?php if(isset($nghiem)) echo $nghiem ?>" /></tr>
<tr>
<td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
</tr>
</table>
</form>
</body>
</html>
