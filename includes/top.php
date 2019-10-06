<?php require_once("includes/sessions.php"); ?>
<?php require_once("includes/dbconnect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Site design by Systematic -->
<!-- If you have any questions about the site -->
<!-- Contact me at crazykaine5391@yahoo.com -->
<!-- Webmaster - Matthew Wright -->
<!-- Omaha, Nebraska -->
<!-- (402) 812-2165 -->
<head>
<meta name="keywords" content="Saint Bernard, animal rescue, adoption, foster care, Nebraska, IA, chapter" />
<meta name="description" content="Home of the Saint Bernard Rescue Foundation - Nebraska Chapter." />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if ( isset($title) ) { print $title; } else { print "Saint Bernard Rescue Foundation - Nebraska Chapter"; } ?></title>
<script type="text/javascript" language="javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="scripts/jqueryform.js"></script>
<script type="text/javascript" language="javascript" src="scripts/AC_RunActiveContent.js"></script>
<script type="text/javascript" language="javascript" src="scripts/lightbox.js"></script>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<link href="styles/main.css" rel="stylesheet" media="all" />
<link href="styles/lightbox.css" rel="stylesheet" media="all" />
<?php
	if ( isset($nav) ) { ?>
<style type="text/css">
	li#<?php print $nav; ?> a { background: #000000; }
</style>
<?php } ?>
<script type="text/javascript">
	$(function(){
		$('input').focus(function() {
			$(this).css('background','#cccccc');
		});
		$('input').blur(function() {
			$(this).css('background','#FFFFFF');
		});
		$('textarea').focus(function() {
			$(this).css('background','#cccccc');
		});
		$('textarea').blur(function() {
			$(this).css('background','#FFFFFF');
		});
	});
</script>
</head>
<body onload="MM_preloadImages('images/applyBtnR.png','images/supportersBtnR.png','images/faqBtnR.png','images/surrenderBtnR.png','images/strayBtnR.png','images/helpBtnR.png')">
<div id="wrapper">
	<div id="branding">
    	<a href="index.php"><img src="images/header.png" alt="NE/IA Saint Bernard Rescue" /></a>
   	  <h1>Saint Bernard Rescue Foundation - Nebraska Chapter</h1>
    </div> <!--ENDS BRANDING DIV-->