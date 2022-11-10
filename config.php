<?php
define('PORTALPATH',"ssp");
define('FXNPATH',"fxn");
define('ARCHIVESPATH',"archives/site");
define('thumbnailPath',"../archives/site");

$wh1 = "&width=140px&height=100px";
$wh2 = "&width=80px&height=80px";
$wh3 = "&width=60px&height=60px";
$wh4 = "&width=150px&height=150px";
$wh5 = "&width=100px&height=100px";
$wh6 = "&width=230px&height=180px";
//Paths
$archive = "archives";
//$domain = 'localhost';
//$sitefolder = 'elibrary';
//$portalfolder = '';
$gallerypath = $archive.'/'.'gallery';
$newspicpath = $archive.'/'.'news';
$copyright = 'Copyright &copy; 2022 RMS. All Rights Reserved. <a href="http://progmatech.com/" target="_blank">Site credit</a>';
//email
$companyemail = 'info@mohost.com.ng';

if ($_SERVER['HTTP_HOST'] == 'localhost'){
	$domain = 'localhost';
	$companyemail = 'info@mohost.com.ng';
	$sitefolder = 'alherisec';
	$portalfolder = '';
	
	//Database
	$dbmhost = "localhost";
	$dbmusername = "root";
	$dbmpassword = '';
	$mdatabase = "dbmrms";

}else{
	$domain = 'alheri.prowebschools.com';
	$companyemail = 'info@prowebschools.com';
	$sitefolder = '';
	$portalfolder = '';
	
	$dbmhost = "localhost";
	$dbmusername = "prowebschools_me4288";
	$dbmpassword = '$J0AX&[XWGO?';
	$mdatabase = "prowebschools_alheri";
}

if($sitefolder != ''){ $sitefolder .= '/';}
if ($portalfolder != ''){$portalfolder .= '/';}

$DIR1 = __DIR__ ;
//$DIR2 = explode("Admin",$DIR1);
$ROOTFILE = addslashes($DIR2[0]);
$ROOTHTTP = "http://".$domain."".$sitefolder.$portalfolder;
?>