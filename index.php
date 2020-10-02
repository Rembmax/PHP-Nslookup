<!DOCTYPE html>
<?php	include ('head.php');	?>
<?php	include ('function.php');	?>
<html lang="en">
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
<h1>Php NSlookup</h1>
<br>
<h5> REG: A / AAAA / CAA / MX / NS / TXT </h5>
</div>
<br>
<br>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8 text-center">
<h5> Your IP is: <?php echo getUserIP();?></h5><br>
<form class="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input class="form-control mr-sm-2 text-center" name="Dominio" type="text" placeholder="Dominio: www.ejemple.com / ejemple.com"><br>
<div class="text-info">
<br>
<div class="form-group">
<button class="btn btn-success"  type="submit">Submit</button>
</div>
</form>
<br>
<br>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$Dominio = $_POST['Dominio'];
//////////////////////////////////////////////////////////////////////////////////////////////////////
if(!empty($Dominio)){
	REG_NSLOOKUP($Dominio);
//Reg_AAAA($Dominio);	

}// END if(!empty($Dominio))
///////////////////////////////////////////////////////////////////////////////////////////////////////
}// END ($_SERVER["REQUEST_METHOD"] == "POST")
?>
</div>
</div>
</body>
</html>
