<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login</title>
	<link rel="icon" type="image/png" href="../../assets/img/ico.png" />
	<!-- Bootstrap core CSS -->
	<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body style="background-color: #19191b">

<div class="container" style="color: #fff">
<?php
	require_once('../../config/config.php');
	require_once('../lib/outils.php');
	require_once('../lib/dbManager.php');
	require_once('../lib/xmlGenerator.php');

	if(isset($_POST['tables']) && !empty($_POST['tables'])){
		$tables = generateXmlMenuConfig($_POST['tables']);
		creatAllFile("../../config/menu.xml", $tables);
		$entities = generateXmlDbConfig($db, $_POST['tables']);
		creatAllFile("../../config/entities.xml", $entities);
	}

?>
	<form method="post" action="step4.php" class="form-signin">
		<img src="../../assets/img/logo.png" style="margin-left: -5px" />
		<hr/><span><u>Step 3</u> : Create your admin account</span><hr/>
		<div class='form-group'><label>Email :</label><input class='form-control' placeholder="example@domain.com" type="email" name="email" required/></div>
		<div class='form-group'><label>Password :</label><input class='form-control' placeholder="your password" type="password" name="pass" required/></div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
	</form>

</div> <!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>