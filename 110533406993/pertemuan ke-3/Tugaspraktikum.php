<form onSubmit="return validasi(this)" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
<table> 
	<tr>
		<td height="40"><font color="#000000">Username : &nbsp; </td>
		<td> <input type="text" name="user" placeholder="Username"/> </td>
	</tr>
	<br>
       <tr>
	<td height="40">
	<font color="#000000">Password : &nbsp; </td>
	<td> <input type="password" name="password" placeholder="Password"/> </td> </tr>	
</table>
	<td height="40"> </td> <input type="submit" value="Login"/></td>
 	<br><br> 
	<script type="text/javascript">
	function validasi(form)
	{
		if (form.user.value.length==0 || form.password.value.length==0)
		{
			alert("Isi yang kosong");
			form.user.focus();
			return false;
		}
	}
	</script>
	<?php
	if (isset($_POST['user']) || isset($_POST['password'])) { 
	if ((eregi("[^a-zA-Z ]", $_POST['user'])) || (eregi("[^a-zA-Z ]", $_POST['password']))) 
	{
		echo "Ada Data yang Bukan String, Epic Fail";
	}
	else
	{
		echo 'Selamat Datang, ' . $_POST['user'];
	}	 
	} 
	?>	
</form>