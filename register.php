<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thank-you.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/fg_membersite.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/pwdwidget.css" />
	<script type='text/javascript' src='js/gen_validatorv31.js'></script>
	<script src="js/pwdwidget.js" type="text/javascript"></script>      
</head>
<body>
<p class ="go-back-link"><a href="settings.html"> Volver a la Configuración </a></p>
	<!-- Form Code Start -->
	<div id='fg_membersite' class='container'>
		<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
		<fieldset >
		<legend>Registrar</legend>

		<input type='hidden' name='submitted' id='submitted' value='1'/>

		<div class='short_explanation'>* campos requeridos</div>
		<input type='text'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />

		<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
		<div class='container'>
		    <label for='name' >Tu Nombre Completo*: </label><br/>
		    <input type='text' name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
		    <span id='register_name_errorloc' class='error'></span>
		</div>
		<div class='container'>
		    <label for='email' >Dirección de e-mail*:</label><br/>
		    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
		    <span id='register_email_errorloc' class='error'></span>
		</div>
		<div class='container'>
		    <label for='username' >Nombre de Usuario*:</label><br/>
		    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
		    <span id='register_username_errorloc' class='error'></span>
		</div>
		<div class='container' style='height:80px;'>
		    <label for='password' >Contraseña*:</label><br/>
		    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
		    <noscript>
		    <input type='password' name='password' id='password' maxlength="50" />
		    </noscript>    
		    <div id='register_password_errorloc' class='error' style='clear:both'></div>
		</div>

		<div class='container'>
		    <input type='submit' name='Submit' value='Submit' />
		</div>

		</fieldset>
		</form>
		<!-- client-side Form Validations:
		Uses the excellent form validation script from JavaScript-coder.com-->

		<script type='text/javascript'>
		// <![CDATA[
		    var pwdwidget = new PasswordWidget('thepwddiv','password');
		    pwdwidget.MakePWDWidget();
		    
		    var frmvalidator  = new Validator("register");
		    frmvalidator.EnableOnPageErrorDisplay();
		    frmvalidator.EnableMsgsTogether();
		    frmvalidator.addValidation("name","req","Please provide your name");

		    frmvalidator.addValidation("email","req","Please provide your email address");

		    frmvalidator.addValidation("email","email","Please provide a valid email address");

		    frmvalidator.addValidation("username","req","Please provide a username");
		    
		    frmvalidator.addValidation("password","req","Please provide a password");

		// ]]>
		</script>

		<!--
		Form Code End (see html-form-guide.com for more info.)
		-->
	</div>
</body>
</html>