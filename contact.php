<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
$(document).bind("contextmenu",function(e) {
 e.preventDefault();
});
</script>
<title>Contact me!</title>
</head>
<link rel="icon" href="http://local.chicoer.com/common/dfm/assets/logos/small/chicoer.png?082017">
<link href='stylesheet.css' rel='stylesheet' type='text/css'>

<body>
  <div id="link1">
  <p class="link fade"><a href="index.html">home</a></p>
  </div>
<form action="mailer.php" method="post" name="form1" id="form1" style="margin:0px; font-family:press_startregular;font-size:11px; width:300px;" onsubmit="MM_validateForm('from','','RisEmail','subject','','R','verif_box','','R','message','','R');return document.MM_returnValue">

Your Name:<br />
<input name="name" type="text" id="name" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px; font-family:press_startregular;font-size11px;" value="<?php echo $_GET['name'];?>"/>
<br />
<br />

Your e-mail:<br />
<input name="from" type="text" id="from" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;" value="<?php echo $_GET['from'];?>"/>
<br />
<br />

Subject:<br />
<input name="subject" type="text" id="subject" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;" value="<?php echo $_GET['subject'];?>"/>
<br />
<br />

Type verification image:<br />
<input name="verif_box" type="text" id="verif_box" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"/>
<img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="50" height="24" align="absbottom" /><br />
<br />

<!-- if the variable "wrong_code" is sent from previous page then display the error field -->
<?php if(isset($_GET['wrong_code'])){?>
<div style="border:1px solid #990000; background-color:#D70000; color:#FFFFFF; padding:4px; padding-left:6px;width:295px;">Wrong verification code</div><br />
<?php ;}?>

Message:<br />
<textarea name="message" cols="6" rows="5" id="message" style="padding:2px; border:1px solid #CCCCCC; width:300px; height:100px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"><?php echo $_GET['message'];?></textarea>
<noscript><a href="http://www.thewebhelp.com" style="display:none;">contact form by thewebhelp</a></noscript>
<input name="Submit" type="submit" style="margin-top:10px; display:block; border:1px solid #000000; width:100px; height:20px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:2px; padding-right:2px; padding-top:0px; padding-bottom:2px; line-height:14px; background-color:#EFEFEF;" value="Send Message"/>
</form>
</body>
</html>
