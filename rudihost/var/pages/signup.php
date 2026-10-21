<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title><? echo "$yourdomain" ;?> Contact Us</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="1.css" type="text/css" media="screen,projection" />

</head>
<body>

<? 
$yourdomain = $_SERVER['HTTP_HOST'];
$yourdomain = preg_replace('/^www\./' , '' , $yourdomain);

?>
<div id="wrapper" class="fluid">

<div id="header">
<? include ("header.php"); ?>
</div>
        

<div id="sidebar_right">
<?
// edit sidebarright.php to change the right side bar on all pages;
?>
<? include ("sidebarright.php"); ?>			
</div>

<div id="content">
<h2><? echo "$yourdomain" ;?> Sign Up For Free Hosting</h2>
<p>

Fill out the form below and your free hosting account will be created. <br>

<? include ("signupform.php"); ?>

</p>		
<br>

<img alt="" src="images/logos.gif">		
        
</p>
</div>

<? include ("footer.php"); ?>

</div>

</body>
</html>
