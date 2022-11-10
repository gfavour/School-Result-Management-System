<?php include("head.php"); ?>
<?php
$m = $_GET[m];
if ($_POST["dwat"] == "slogin"){
	if ($_POST["username"] == ''){$m = 'Username/Email is required';}
	elseif ($_POST["password"] == ''){$m = 'Password is required';}
	else{	
	$pwd = HashPassword($_POST[password]);
	$sql = "SELECT registration1.id, registration1.lastname,registration1.firstname,registration1.email,registration1.isapproved,registration1.isverify,registration1.ispaid,registration2.program,registration2.clevel FROM registration1 INNER JOIN registration2 ON registration1.id = registration2.userid WHERE (regno = '".mysql_escape_string(urldecode($_POST["username"]))."' OR username = '".mysql_escape_string(urldecode($_POST["username"]))."') AND password = '".mysql_real_escape_string(urldecode($pwd))."' AND isapproved = '1' ORDER BY id";
	$qry = mysql_query($sql,$conn4as);
	$total = mysql_num_rows($qry);
	
	if($total > 0){
	$rs = mysql_fetch_assoc($qry);
	$regprogram17 = $rs["program"];
	
    $m = 'Logging in...';
	
	if($regprogram17 == 'PRENCE'){ 
	$_SESSION["pre-i17"] = $rs["id"];
	$_SESSION["pre-n17"] = $rs["lastname"].' '.$rs["firstname"];
	$_SESSION["pre-em17"] = $rs["email"];
	$_SESSION["pre-ap17"] = $rs["isapproved"];
	$_SESSION["pre-pp17"] = ''; //$rs["passport"];
	$_SESSION["pre-program17"] = $rs["program"];
	$_SESSION["pre-clevel17"] = $rs["clevel"];
	redirect('prence/index.php'); 
	
	}elseif($regprogram17 == 'RNCE'){ 
	$_SESSION["reg-i17"] = $rs["id"];
	$_SESSION["reg-n17"] = $rs["lastname"].' '.$rs["firstname"];
	$_SESSION["reg-em17"] = $rs["email"];
	$_SESSION["reg-ap17"] = $rs["isapproved"];
	$_SESSION["reg-pp17"] = ''; //$rs["passport"];
	$_SESSION["reg-program17"] = $rs["program"];
	$_SESSION["reg-clevel17"] = $rs["clevel"];
	redirect('regular/index.php'); 
	
	}elseif($regprogram17 == 'SNCE'){ 
	$_SESSION["san-i17"] = $rs["id"];
	$_SESSION["san-n17"] = $rs["lastname"].' '.$rs["firstname"];
	$_SESSION["san-em17"] = $rs["email"];
	$_SESSION["san-ap17"] = $rs["isapproved"];
	$_SESSION["san-pp17"] = ''; //$rs["passport"];
	$_SESSION["san-program17"] = $rs["program"];
	$_SESSION["san-clevel17"] = $rs["clevel"];
	redirect('sandwich/index.php'); 
	
	}elseif($regprogram17 == 'IJMB'){ 
	$_SESSION["ijm-i17"] = $rs["id"];
	$_SESSION["ijm-n17"] = $rs["lastname"].' '.$rs["firstname"];
	$_SESSION["ijm-em17"] = $rs["email"];
	$_SESSION["ijm-ap17"] = $rs["isapproved"];
	$_SESSION["ijm-pp17"] = ''; //$rs["passport"];
	$_SESSION["ijm-program17"] = $rs["program"];
	$_SESSION["ijm-clevel17"] = $rs["clevel"];
	redirect('ijmb/index.php'); 
	
	}elseif($regprogram17 == 'PD'){ 
	$_SESSION["pde-i17"] = $rs["id"];
	$_SESSION["pde-n17"] = $rs["lastname"].' '.$rs["firstname"];
	$_SESSION["pde-em17"] = $rs["email"];
	$_SESSION["pde-ap17"] = $rs["isapproved"];
	$_SESSION["pde-pp17"] = ''; //$rs["passport"];
	$_SESSION["pde-program17"] = $rs["program"];
	$_SESSION["pde-clevel17"] = $rs["clevel"];
	redirect('pde/index.php'); 
	}
	
	}else{
		$m = 'Account not found.';
	}
	
	}
}
?>
<body style="background:#00A65A; padding:5% 0 0 0;">
<!-- end main -->
<div class="main_btmx"><!-- start main_btm -->
	<div class="container">
	
	<div style="border:#ccc solid 1px;border-radius:5px; background:#fff;margin:auto; width:50%; text-align:center;">
	
<form name="frm1x" id="frm1x" class="classForm" method="post" action="" style="margin:20px auto 20px auto; width:80%;">
<img src="images/logo2.png" style="width:60%; height:auto; margin:auto;"><br clear="all">
<h2 style="text-align:center;">Student Login</h2>
<?php echo ($m != '')?'<div id="msgbox">'.$m.'</div>':''; ?>
<div style="margin-top:25px !important;">
<input type="hidden" name="dwat" value="slogin">
<input type="text" name="username" value="" placeholder="Matric No / Registration No / Username *" style="border:#ddd solid 1px; padding:10px; width:100%; margin:0 0 10px 0;">
<input type="password" name="password" value="" placeholder="Password *" style="border:#ddd solid 1px; padding:10px; width:100%; margin:0 0 10px 0;">
<a href="#">Forgot your password?</a><br>
<input type="submit" name="cmdsubmit1" id="cmdsubmit1" value="Login" style="margin:5px 0 20px 0;min-width:150px;" class="btn btn-lg btn-success">
</div>
</form>

</div>

	</div>


</div>
<?php //include("footer.php"); ?>
</body>
</html>