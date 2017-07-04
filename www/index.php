<html>
<head>
	<title>Pull Request Placeholder</title>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<style>
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}

	#logo {
		margin-bottom: 40px;
	}
	</style>
</head>
<body>
	<p>
		<b><?php echo $_ENV["SERVICE_NAME"] ?></b> will update automatically once we receive the webhook from Docker Hub
	</p>
	<p>
		IMAGE: <b><?php echo $_ENV["TARGET_IMAGE"] ?></b>
		<br/>
		GIT SHA: <b><?php echo $_ENV["GIT_SHA"] ?></b>
		<br/>
		<a href="<?php echo $_ENV["PR_URL"] ?>"><?php echo $_ENV["PR_TITLE"] ?></a>
	</p>
	<p>
		Meanwhile you can hang out with napoleon dynamite
		<br />
		<br />
		<img id="logo" src="napoleon_dynamite.gif" />
	</p>
	<script>
	setInterval(function(){
		window.location.reload(true);
	}, 1000*30);
	</script>
</body>
</html>
