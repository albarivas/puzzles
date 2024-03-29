<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("cities.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	<title>Iniciar Sesión</title>
	<link rel="STYLESHEET" type="text/css" href="css/fg_membersite.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<script type='text/javascript' src='js/gen_validatorv31.js'></script>
</head>
<body>
<p class = "go-back-link"><a href="settings.html"> Volver a la Configuración </a></p>
<!-- Form Code Start -->
<div id='fg_membersite' class='container'>
	<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
	<fieldset >
	<legend>Iniciar Sesión</legend>

	<input type='hidden' name='submitted' id='submitted' value='1'/>

	<div class='short_explanation'>* campos requeridos</div>

	<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
	<div class='container'>
	    <label for='username' >Nombre de Usuario*:</label><br/>
	    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
	    <span id='login_username_errorloc' class='error'></span>
	</div>
	<div class='container'>
	    <label for='password' >Contraseña*:</label><br/>
	    <input type='password' name='password' id='password' maxlength="50" /><br/>
	    <span id='login_password_errorloc' class='error'></span>
	</div>

	<div class='container'>
	    <input type='submit' name='Submit' value='Enviar' />
	</div>
	<div class='short_explanation'><a href='reset-pwd-req.php'>¿Olvidaste la contraseña?</a></div>
	</fieldset>
	</form>
	<!-- client-side Form Validations:
	Uses the excellent form validation script from JavaScript-coder.com-->

	<script type='text/javascript'>
	// <![CDATA[

	    var frmvalidator  = new Validator("login");
	    frmvalidator.EnableOnPageErrorDisplay();
	    frmvalidator.EnableMsgsTogether();

	    frmvalidator.addValidation("username","req","Please provide your username");
	    
	    frmvalidator.addValidation("password","req","Please provide the password");

	// ]]>
	</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>